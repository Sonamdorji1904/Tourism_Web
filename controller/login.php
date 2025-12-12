<?php
require_once __DIR__ . '/../helper/auth.php';

if (isLoggedIn()) {
    header('Location: ../admin/view/index.html.php');
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
            header('Location: ../admin/view/index.html.php');
            exit;
        } else {
            $error = 'Invalid username or password.';
            header('Location: ../admin/view/index.html.php');
            exit;
        }
    }
}
