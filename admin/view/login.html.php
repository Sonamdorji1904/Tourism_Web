<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Css/login.css">
</head>

<body>
    <?php require_once __DIR__ . '/../../helper/auth.php';

    if (isLoggedIn()) {
        header('Location: index.html.php');
        exit;
    }
    ?>
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

            <form action="../../controller/login.php" method="post" novalidate>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="username" required placeholder="you@example.com">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>

                <div class="form-group login-actions">
                    <a href="/password-reset.html.php" class="contact-link">Forgot password?</a>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-full">Log in</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>