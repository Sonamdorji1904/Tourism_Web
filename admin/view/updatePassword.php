<?php
require_once __DIR__ . '/../../helper/auth.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Password - Admin</title>
    <link rel="stylesheet" href="../../Css/styles.css">
    <style>
        /* small page-specific adjustments to match site theme */
        .admin-panel {
            padding: 2rem 0;
        }

        .admin-card {
            background: var(--neutral-100);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            max-width: 720px;
            margin: 0 auto;
        }

        .admin-card h1 {
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .admin-card .muted {
            color: var(--neutral-700);
            margin-bottom: 1rem;
        }

        .msg-error {
            color: #b91c1c;
            margin-top: 10px;
        }

        .msg-success {
            color: #15803d;
            margin-top: 10px;
        }

        .form-actions {
            margin-top: 1rem;
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }
    </style>
</head>

<body>

    <?php require_once __DIR__ . '/../../includes/templates/adminHeader.html.php'; ?>

    <main class="admin-panel container">
        <div class="admin-card">

            <h1>Change Password</h1>
            <p class="muted">Update your administrator password. Choose a strong password and keep it confidential.</p>

            <form method="post" action="../../controller/changePassword.php">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" required>
                </div>

                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                    <a href="index.html.php" class="btn btn-outline">Cancel</a>
                </div>
            </form>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../includes/templates/footer.html.php'; ?>

</body>

</html>