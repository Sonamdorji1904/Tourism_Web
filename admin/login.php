<?php
require_once __DIR__ . '/../../helper/auth.php';

if (isLoggedIn()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Please enter both username and password.';
    } else {
        if (login($username, $password)) {
            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Invalid username or password.';
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>

<body>

    <h1>Admin Login</h1>

    <?php if ($error): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">
        <label>
            Username:
            <input type="text" name="username" required>
        </label>
        <br><br>
        <label>
            Password:
            <input type="password" name="password" required>
        </label>
        <br><br>
        <button type="submit">Login</button>
    </form>

</body>

</html>