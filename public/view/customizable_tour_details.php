<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . '/../../helper/auth.php';
requireAdmin();
require_once __DIR__ . '/../../includes/templates/adminHeader.html.php';
require_once __DIR__ . '/../../helper/StringHelper.php';
$stringHelper = new StringHelper();
require_once __DIR__ . '/../../controller/connects/TourCard.php';
$tourTitle = '';
$sub_title = '';
$tourId = isset($_GET['id']) ? intval($_GET['id']) : null;
if ($tourId) {
    try {
        $tourCardModel = new TourCard();
        $row = $tourCardModel->findTourById($tourId);
        if ($row) {
            $tourTitle = $row['title'];
            $sub_title = $row['sub_title'];
        }
    } catch (Throwable $e) {
        error_log('Could not load tour title for id ' . $tourId . ': ' . $e->getMessage());
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $stringHelper->safeDisplay($tourTitle) ?> - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Css/countryDropdown.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- Navigation -->
    <?php require_once __DIR__ . '/../../includes/templates/adminHeader.html.php'; ?>

    <!-- Tour Detail Hero -->
    <section class="tour-detail-hero" data-hero="../../public/bg2.jpg">
        <div class="hero-overlay"></div>
        <div class="tour-detail-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html.php">Home</a> / <a href="tours.html.php">Tours</a> <?php echo $stringHelper->safeDisplay($tourTitle) ?>
                </div>
                <h1><?php echo $stringHelper->safeDisplay($tourTitle) ?></h1>
                <p class="tour-subtitle"><?php echo $stringHelper->safeDisplay($sub_title) ?></p>
                <div class="tour-quick-info">
                    <div class="quick-info-item">
                        <strong>Duration:</strong> custom
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

                    <?php include __DIR__ . '/../../includes/templates/form/request_quote_form.html.php'; ?>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-section">
                    <div class="contact-info-card">
                        <h3>Contact Information</h3>
                        <p>We're here to help you plan your perfect Bhutan adventure</p>

                        <div class="contact-details-list">
                            <div class="contact-detail-item">
                                <div class="contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
                                        <path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5L4 8V6l8 5 8-5v2z" />
                                    </svg>
                                </div>
                                <div>
                                    <strong>Email</strong>
                                    <p>info@happinesstravel.bt</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
                                        <path d="M6.62 10.79a15.054 15.054 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1v3.5a1 1 0 01-1 1C10.29 21.5 2.5 13.71 2.5 3.5A1 1 0 013.5 2.5H7a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.01l-2.2 2.2z" />
                                    </svg>
                                </div>
                                <div>
                                    <strong>Phone</strong>
                                    <p>+975 16108570</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
                                        <path d="M20.5 3.5A11.94 11.94 0 0012 0C5.372 0 .001 5.373.001 12A11.94 11.94 0 004.5 20.5L3 24l3.6-1.3A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12 0-1.86-.38-3.63-1.1-5.2zM16.2 14c-.3.8-1.7 1.5-2.4 1.6-.6.1-1.2.1-2.9-.9-2.5-1.5-4-4.2-4.4-4.7-.4-.5-.1-.8.3-1.1.2-.2.5-.3.8-.1.2.1.6.3.9.6.3.3.4.5.6.9.2.4.1.7-.1 1-.2.2-.4.5-.4.8 0 .3.8 1.6 1.9 2.6 1.3 1.2 2.6 1.7 3.1 1.8.5.1 1 .1 1.4-.1.5-.2 1.4-.8 1.7-1.5.3-.6.3-1.1.2-1.2-.1-.2-.7-.3-1.7-.8-.9-.4-1.6-.8-1.9-1.1-.3-.3-.2-.5.1-.8.3-.3.8-.8 1.1-1.1.3-.3.6-.4.8-.3.2.1.6.2 1.1.6.4.3 1 .9 1.2 1.1.2.3.2.8-.1 1.6z" />
                                    </svg>
                                </div>
                                <div>
                                    <strong>WhatsApp</strong>
                                    <p>+975 16108570</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <strong>Location</strong>
                                    <p>Thimphu, Bhutan</p>
                                </div>
                            </div>

                            <!-- <div class="contact-detail-item">
                                <div class="contact-icon">🕐</div>
                                <div>
                                    <strong>Office Hours</strong>
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM (BTT)</p>
                                    <p>Saturday: 9:00 AM - 1:00 PM</p>
                                    <p>Sunday: Closed</p>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="quick-contact-card">
                        <h4>Quick Response</h4>
                        <p>Need immediate assistance? Reach us through:</p>
                        <div class="quick-contact-buttons">
                            <a href="https://wa.me/+97516108570" class="quick-contact-btn whatsapp">
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
                <?php
                $tourCardModel = new TourCard();

                $getRandomTours = $tourCardModel->getRandomToursExcluding($tourId, 3);

                if ($getRandomTours) {
                    foreach ($getRandomTours as $tour) {
                        $itinerayId = $tour['id'] ?? '';
                        $title = $tour['title'] ?? '';
                        $sub_title = $tour['sub_title'] ?? '';
                        $duration = $tour['duration'] ?? '';
                        $baseUrl = '/Happiness horizone';
                        $imageFilePath = $baseUrl . '/' . ltrim($tour['image_path'], '/');

                        include __DIR__ . '/../../includes/templates/tour/simpleTourCard.php';
                    }
                } else {
                    echo "<p>No similar tours available at the moment.</p>";
                }
                ?>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'includes/templates/footer.html.php'; ?>


    <script>
        <?php include 'Js/javascript.js'; ?>
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