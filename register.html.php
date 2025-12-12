<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        .login-hero, .register-hero {
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

        .login-hero .hero-overlay, .register-hero .hero-overlay {
            background: var(--hero-overlay-color);
        }

        .login-card-wrap { padding: var(--spacing-xl) 0; display:flex; justify-content:center; align-items:flex-start; }
        .login-card { width:100%; max-width:520px; background:var(--neutral-100); border-radius:var(--radius-lg); padding:2rem; box-shadow:0 10px 30px rgba(0,0,0,0.12); }
        .login-card h2 { margin-bottom:0.75rem; color:var(--primary); }
        .login-card p.lead { margin-bottom:1.25rem; color:var(--neutral-700); }
        .form-group { margin-bottom:1rem; }
        @media (max-width:480px){ .login-card{ padding:1.25rem } }
    </style>
</head>

<body>
    <?php require_once 'includes/templates/header.html.php'; ?>

    <section class="register-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Create an Account</h1>
        </div>
    </section>

    <main class="login-card-wrap container">
        <div class="login-card" role="main" aria-labelledby="register-title">
            <h2 id="register-title">Register</h2>
            <p class="lead">Create your account to manage bookings and preferences.</p>

            <form action="/register.php" method="post" novalidate>
                <div class="form-group">
                    <label for="fullname">Full name</label>
                    <input type="text" id="fullname" name="fullname" required placeholder="Your full name">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required placeholder="you@example.com">
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="+975 17xxxxxxx">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Choose a password">
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required placeholder="Repeat your password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-full">Create account</button>
                </div>

                <p style="text-align:center; font-size:0.95rem; color:var(--neutral-700);">Already have an account? <a href="/login.html.php" class="contact-link">Sign in</a></p>
            </form>
        </div>
    </main>

    <?php require_once 'includes/templates/footer.html.php'; ?>

    <script>
        <?php include 'Js/javascript.js'; ?>
    </script>
</body>

</html>