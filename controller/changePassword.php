<?php
require_once __DIR__ . '/../helper/auth.php';
require_once __DIR__ . '/../model/user/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $currentPassword = $_POST['current_password'] ?? '';
    $newPassword     = $_POST['new_password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($currentPassword === '' || $newPassword === '' || $confirmPassword === '') {
        echo "<script>
            alert('All fields are required.');
            window.location.href = '../admin/view/updatePassword.html.php';
          </script>";
        exit();
    } elseif ($newPassword !== $confirmPassword) {
        echo "<script>
            alert('New password and confirm password do not match.');
            window.location.href = '../admin/view/updatePassword.html.php';
          </script>";
        exit();
    } else {

        $userModel = new User();
        $user = $userModel->findByUsername($_SESSION['username']);

        if (!$user) {
            echo "<script>
            alert('User not found.');
            window.location.href = '../admin/view/updatePassword.html.php';
          </script>";
            exit();
        } elseif (!password_verify($currentPassword, $user['password_hash'])) {
            echo "<script>
            alert('Current password is incorrect.');
            window.location.href = '../admin/view/updatePassword.html.php';
          </script>";
            exit();
        } else {
            $newHash = password_hash($newPassword, PASSWORD_DEFAULT);
            $updated = $userModel->updatePassword((int)$user['id'], $newHash);

            if ($updated) {
                $success = 'Password changed successfully.';
                echo "<script>
            alert('Password changed successfully.');
            window.location.href = '../admin/view/index.html.php';
          </script>";
                exit();
            } else {
                echo "<script>
            alert('Failed to update password. Please try again');
            window.location.href = '../admin/view/updatePassword.html.php';
          </script>";
                exit();
            }
        }
    }
}
