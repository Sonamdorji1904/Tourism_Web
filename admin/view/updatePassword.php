<?php
require_once __DIR__ . '/../../helper/auth.php';
requireAdmin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Password - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            max-width: 400px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            margin-top: 15px;
            padding: 8px 16px;
        }

        .msg-error {
            color: red;
            margin-top: 10px;
        }

        .msg-success {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <p><a href="">&larr; Back to Dashboard</a></p>

    <h1>Change Password</h1>

    <?php if ($error): ?>
        <div class="msg-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="msg-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form method="post" action="../../controller/changePassword.php">
        <label>
            Current Password:
            <input type="password" name="current_password" required>
        </label>

        <label>
            New Password:
            <input type="password" name="new_password" required>
        </label>

        <label>
            Confirm New Password:
            <input type="password" name="confirm_password" required>
        </label>

        <button type="submit">Change Password</button>
    </form>

</body>

</html>