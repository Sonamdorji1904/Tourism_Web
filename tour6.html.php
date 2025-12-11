<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Bhutan Getaway - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Accordion styles for itinerary -->
    <link rel="stylesheet" href="Css/tour.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'includes/templates/header.html.php';
    $tourTitle = "customise tour";
    $duration = 0;
    require_once __DIR__ . '/helper/StringHelper.php';
    $stringHelper = new StringHelper(); ?>


    <!-- Tour Detail Hero -->
    <section class="tour-detail-hero" data-hero="public/bg2.jpg">
        <div class="hero-overlay"></div>
        <div class="tour-detail-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html.php">Home</a> / <a href="tours.html.php">Tours</a> / Honeymoon: Two Hearts, One Kingdom
                </div>
                <h1>Honeymoon: Two Hearts, One Kingdom</h1>
                <p class="tour-subtitle">Perfect introduction to the Land of Happiness</p>
                <div class="tour-quick-info">
                    <div class="quick-info-item">
                        <strong>Duration:</strong> -----
                    </div>
                    <div class="quick-info-item">
                        <strong>Best Time:</strong> March - May, Sept - Nov
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-page">
        <div class="container">
            <div class="contact-page-layout">
                <!-- Contact Form -->
                <div class="contact-form-section">
                    <h2>Customise Your Tour</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours</p>

                    <?php include 'includes/templates/form/option_request_quote_form.html.php'; ?>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-section">
                    <div class="contact-info-card">
                        <?php include 'includes/templates/form/tourDetailsRequestQuote.html.php'; ?>
                    </div>

                    <div class="quick-contact-card">
                        <h4>Quick Response</h4>
                        <p>Need immediate assistance? Reach us through:</p>
                        <div class="quick-contact-buttons">
                            <a href="#" class="quick-contact-btn whatsapp">
                                <span></span> WhatsApp
                            </a>
                            <a href="tel:+97516108570" class="quick-contact-btn phone">
                                <span></span> Call Now
                            </a>
                            <a href="mailto:info@happinesstravel.bt" class="quick-contact-btn email">
                                <span></span> Email
                            </a>
                        </div>
                    </div>

                    <div class="social-media-card">
                        <h4>Follow Us</h4>
                        <p>Stay updated with our latest tours and travel tips</p>
                        <div class="social-media-links">
                            <a href="https://www.facebook.com/share/1Cf6CmHeWk/?mibextid=wwXIfr" class="social-media-btn facebook">Facebook</a>
                            <a href="#" class="social-media-btn instagram">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Similar Tours -->
    <section class="similar-tours">
        <div class="container">
            <h2>You May Also Like</h2>
            <div class="tours-grid">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/black-necked-crane.jpg" alt="Taste of Happiness">
                        <div class="tour-duration">6 Days</div>
                    </div>
                    <div class="tour-content">
                        <h3>Taste of Happiness</h3>
                        <p>Immerse yourself in Bhutan's rich culture and breathtaking landscapes.</p>
                        <a href="tour-detail.html.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/image 4.jpg" alt="The Living Heritage">
                        <div class="tour-duration">7 Days</div>
                    </div>
                    <div class="tour-content">
                        <h3>The Living Heritage</h3>
                        <p>Discover Bhutan's living heritage where ancient traditions meet natural beauty.</p>
                        <a href="tour-detail.html.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/image 7.png" alt="Honeymoon Package">
                        <div class="tour-duration">Customizable</div>
                    </div>
                    <div class="tour-content">
                        <h3>Honeymoon Package</h3>
                        <p>Celebrate your love in the mystical Kingdom of Bhutan.</p>
                        <a href="tour6.html.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'includes/templates/footer.html.php'; ?>


    <script>
        <?php include 'Js/javascript.js';
        include 'Js/filter_country.js'; ?>
    </script>

    <!-- Accordion script -->
    <script>
        (function() {
            const accordion = document.getElementById('itinerary-accordion');
            if (!accordion) return;
            const buttons = accordion.querySelectorAll('.accordion-button');

            function closeAll(except) {
                buttons.forEach(btn => {
                    if (btn !== except) {
                        btn.setAttribute('aria-expanded', 'false');
                        const panel = document.getElementById(btn.getAttribute('aria-controls'));
                        if (panel) {
                            panel.hidden = true;
                        }
                    }
                });
            }

            buttons.forEach(btn => {
                const panel = document.getElementById(btn.getAttribute('aria-controls'));
                if (panel) {
                    panel.hidden = true;
                }

                btn.addEventListener('click', function() {
                    const expanded = this.getAttribute('aria-expanded') === 'true';
                    if (expanded) {
                        this.setAttribute('aria-expanded', 'false');
                        if (panel) panel.hidden = true;
                    } else {
                        closeAll(this);
                        this.setAttribute('aria-expanded', 'true');
                        if (panel) panel.hidden = false;
                        if (panel) panel.focus();
                    }
                });

                btn.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            });
        })();
    </script>
</body>

</html>