<?php
// helper/auth.php
// 1. Start session (only once per request, before any HTML output)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Load composer autoload and environment if available
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
    if (class_exists('\Dotenv\Dotenv')) {
        $envPath = dirname(__DIR__);
        try {
            $dotenv = Dotenv\Dotenv::createImmutable($envPath);
            $dotenv->safeLoad();
        } catch (Throwable $e) {
            // ignore if dotenv not usable
        }
    }
}

require_once __DIR__ . '/../model/user/User.php';
require_once __DIR__ . '/jwt.php';

// JWT settings (read from env when available)
if (!defined('JWT_SECRET')) {
    $envSecret = getenv('JWT_SECRET') ?: null;
    define('JWT_SECRET', $envSecret ?: 'CHANGE_THIS_TO_A_LONG_RANDOM_SECRET');
}

if (!defined('JWT_TTL_SECONDS')) {
    $envTtl = getenv('JWT_TTL_SECONDS') ?: null;
    define('JWT_TTL_SECONDS', (int)($envTtl ?: 1800)); // 30 minutes default
}
/**
 * Log the user in
 */
function login(string $username, string $password): bool
{
    $userModel = new User();
    $user = $userModel->findByUsername($username);

    if (!$user) {
        return false;
    }

    if (!password_verify($password, $user['password_hash'])) {
        return false;
    }

    // Success: regenerate session ID to prevent session fixation
    session_regenerate_id(true);

    // Store minimal session info used by other parts of the app
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['last_activity'] = time();

    // generate a unique token id (jti) and create JWT payload
    $jti = bin2hex(random_bytes(16));
    $payload = [
        'jti' => $jti,
        'sub' => (int)$user['id'],
        'username' => $user['username'],
        'role' => $user['role'],
        'iat' => time(),
        'exp' => time() + JWT_TTL_SECONDS,
    ];

    $header = ['alg' => 'HS256', 'typ' => 'JWT'];
    $token = jwt_sign($header, $payload, JWT_SECRET);

    // Set token in an HttpOnly cookie scoped to the site. Secure should be true on HTTPS.
    setcookie('hh_jwt', $token, [
        'expires' => time() + JWT_TTL_SECONDS,
        'path' => '/',
        'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    return true;
}

/**
 * Log the user out
 */
function logout(): void
{
    // Attempt to revoke current token server-side (so it cannot be reused)
    $token = $_COOKIE['hh_jwt'] ?? '';
    if (!empty($token)) {
        $payload = jwt_verify($token, JWT_SECRET);
        if (is_array($payload) && !empty($payload['jti'])) {
            try {
                require_once __DIR__ . '/../controller/connects/RevokedTokens.php';
                $rev = new RevokedTokens();
                $rev->revokeJti($payload['jti'], (int)($payload['exp'] ?? time()));
            } catch (Throwable $e) {
                error_log('Failed to revoke token on logout: ' . $e->getMessage());
            }
        }
    }

    // Clear session array
    $_SESSION = [];

    // Destroy session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"] ?? false,
            $params["httponly"] ?? true
        );
    }

    // Destroy session data
    session_destroy();
    // Clear JWT cookie
    setcookie('hh_jwt', '', [
        'expires' => time() - 3600,
        'path' => '/',
        'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
}

/**
 * Is user logged in?
 */
function isLoggedIn(): bool
{
    // Prefer verifying JWT token
    $token = $_COOKIE['hh_jwt'] ?? '';
    if (empty($token)) return false;

    $payload = jwt_verify($token, JWT_SECRET);
    if (empty($payload) || !is_array($payload)) return false;

    // Check server-side revocation
    if (!empty($payload['jti'])) {
        try {
            require_once __DIR__ . '/../controller/connects/RevokedTokens.php';
            $rev = new RevokedTokens();
            if ($rev->isRevoked($payload['jti'])) {
                // revoke cookie/session
                logout();
                return false;
            }
        } catch (Throwable $e) {
            error_log('RevokedTokens check failed: ' . $e->getMessage());
            // conservative: treat as not logged in when revocation check fails
            return false;
        }
    }

    // check last activity timeout stored in session (fallback)
    $last = $_SESSION['last_activity'] ?? null;
    if ($last !== null && (time() - (int)$last) > JWT_TTL_SECONDS) {
        // expired by inactivity
        logout();
        return false;
    }

    // update session activity timestamp
    $_SESSION['last_activity'] = time();

    return true;
}

/**
 * Is user admin?
 */
function isAdmin(): bool
{
    if (!isLoggedIn()) return false;

    $token = $_COOKIE['hh_jwt'] ?? '';
    $payload = $token ? jwt_verify($token, JWT_SECRET) : null;
    if (!$payload || !is_array($payload)) return false;

    return (isset($payload['role']) && strtolower($payload['role']) === 'admin');
}

/**
 * Force login for a page (any logged-in user)
 */
function requireLogin(): void
{
    if (!isLoggedIn()) {
        header('Location: login.html.php');
        exit;
    }
}

/**
 * Force admin for a page
 */
function requireAdmin(): void
{
    if (!isAdmin()) {
        header('Location: login.html.php');
        exit;
    }

    // additionally enforce inactivity timeout on protected pages
    $last = $_SESSION['last_activity'] ?? null;
    if ($last !== null && (time() - (int)$last) > JWT_TTL_SECONDS) {
        logout();
        header('Location: login.html.php');
        exit;
    }

    // refresh session activity and extend cookie expiration
    $_SESSION['last_activity'] = time();
    if (isset($_COOKIE['hh_jwt'])) {
        $token = $_COOKIE['hh_jwt'];
        $payload = jwt_verify($token, JWT_SECRET);
        if (is_array($payload)) {
            // extend exp
            $payload['exp'] = time() + JWT_TTL_SECONDS;
            $header = ['alg' => 'HS256', 'typ' => 'JWT'];
            $newToken = jwt_sign($header, $payload, JWT_SECRET);
            setcookie('hh_jwt', $newToken, [
                'expires' => time() + JWT_TTL_SECONDS,
                'path' => '/',
                'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
        }
    }
}
