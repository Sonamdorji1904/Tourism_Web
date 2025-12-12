<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* small page-specific tweaks to match theme */
        .login-hero {
            position: relative;
            height: 40vh;
            min-height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('public/bg5.jpg');
            background-size: cover;
            background-position: center;
            margin-top: calc(-1 * var(--navbar-height));
            padding-top: var(--navbar-height);
        }

        .login-hero .hero-overlay {
            background: var(--hero-overlay-color);
        }

        .login-card-wrap {
            padding: var(--spacing-xl) 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .login-card {
            width: 100%;
            max-width: 520px;
            background: var(--neutral-100);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        }

        .login-card h2 {
            margin-bottom: 0.75rem;
            color: var(--primary);
        }

        .login-card p.lead {
            margin-bottom: 1.25rem;
            color: var(--neutral-700);
        }

        .form-group { margin-bottom: 1rem; }

        .login-actions {
            display: flex;
            gap: 0.75rem;
            align-items: center;
            justify-content: space-between;
            margin-top: 0.75rem;
        }

        @media (max-width: 480px) {
            .login-card { padding: 1.25rem; }
        }
    </style>
</head>

<body>
    <?php require_once 'includes/templates/header.html.php'; ?>

    <section class="login-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Admin Login</h1>
        </div>
    </section>

    <main class="login-card-wrap container">
        <div class="login-card" role="main" aria-labelledby="login-title">
            <h2 id="login-title">Log in to your account</h2>
            <p class="lead">Access your bookings and manage your trip details.</p>

            <form action="/login.php" method="post" novalidate>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required placeholder="you@example.com">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>

                <div class="form-group login-actions">
                    <label style="display:flex; align-items:center; gap:8px; font-weight:500; color:var(--neutral-700);">
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="/password-reset.html.php" class="contact-link">Forgot password?</a>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-full">Log in</button>
                </div>

                <p style="text-align:center; font-size:0.95rem; color:var(--neutral-700);">Don't have an account? <a href="register.html.php" class="contact-link">Register</a></p>
            </form>
        </div>
    </main>

    <?php require_once 'includes/templates/footer.html.php'; ?>

    <script>
        <?php include 'Js/javascript.js'; ?>
    </script>
</body>

</html>
