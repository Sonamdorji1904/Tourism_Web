<?php
// helper/auth.php

// 1. Start session (only once per request, before any HTML output)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


require_once __DIR__ . '/../model/user/User.php';
require_once __DIR__ . '../helper/jwt.php';

const JWT_SECRET = 'CHANGE_THIS_TO_A_LONG_RANDOM_SECRET'; // move to env/config in real app
const JWT_TTL_SECONDS = 1800; // 30 minutes
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

    // Store only necessary info in session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    return true;
}

/**
 * Log the user out
 */
function logout(): void
{
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
}

/**
 * Is user logged in?
 */
function isLoggedIn(): bool
{
    return !empty($_SESSION['user_id']);
}

/**
 * Is user admin?
 */
function isAdmin(): bool
{
    return isLoggedIn() && ($_SESSION['role'] ?? '') === 'admin';
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
        header('Location: ../../login.html.php');
        exit;
    }
}
