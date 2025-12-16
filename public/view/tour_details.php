<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Bhutan Getaway - Happiness Horizon Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../Css/tour.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- Navigation -->
    <?php
    require_once __DIR__ . '/../../includes/templates/header.html.php';
    require_once __DIR__ . '/../../helper/StringHelper.php';
    $stringHelper = new StringHelper();
    require_once __DIR__ . '/../../controller/connects/TourCard.php';

    ?>

    <!-- Tour Detail Hero -->
    <section class="tour-detail-hero" data-hero="../../public/bg2.jpg">
        <div class="hero-overlay"></div>
        <div class="tour-detail-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html.php">Home</a> / <a href="tours.html.php">Tours</a> / <?php echo $stringHelper->safeDisplay($tourTitle) ?>
                </div>
                <h1><?php echo $stringHelper->safeDisplay($tourTitle) ?></h1>
                <p class="tour-subtitle"><?php echo $stringHelper->safeDisplay($sub_title) ?></p>
                <div class="tour-quick-info">
                    <div class="quick-info-item">
                        <strong>Duration:</strong> <?php echo $stringHelper->safeDisplay($duration) ?>
                    </div>
                    <div class="quick-info-item">
                        <strong>Best Time:</strong> <?php echo $stringHelper->safeDisplay($bestTime) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Overview -->
    <section class="tour-overview">
        <div class="container">
            <div class="tour-content-layout">
                <div class="tour-main-content">
                    <div class="tour-section">
                        <h2>Tour Overview</h2>
                        <p class="lead"><?php echo $stringHelper->safeDisplay($overview) ?></p>
                    </div>

                    <div class="tour-section">
                        <h2>Tour Highlights</h2>
                        <ul class="highlights-list">
                            <?php
                            foreach ($highlightPoints as $point) {
                                echo '<li>' . $stringHelper->safeDisplay($point) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="tour-section">
                        <h2>Detailed Itinerary</h2>
                        <div class="accordion" id="itinerary-accordion">
                            <?php
                            for ($i = 0; $i < count($tourItineraries); $i++) {
                                $itineraryId = $tourItineraries[$i]['id'] ?? '';
                                $tour_id = $tourItineraries[$i]['tour_id'] ?? '';
                                $dayNumber = $tourItineraries[$i]['day_number'] ?? '';
                                $accordionTitle = $tourItineraries[$i]['title'] ?? '';
                                $description = $tourItineraries[$i]['description'] ?? '';
                                $activities = $tourItineraries[$i]['activities'] ?? '';
                                $meals = $tourItineraries[$i]['meals'] ?? '';
                                $accommodation_options = $tourItineraries[$i]['accomodation'] ?? '';
                                $buttonId = 'day' . ($i + 1) . '-btn';
                                $panelId = 'day' . ($i + 1) . '-panel';
                                include __DIR__ . '/../../includes/templates/tour/tourItinerary.html.php';
                            }
                            ?>
                        </div>
                    </div>
                    <p><strong>Note:</strong>This itinerary is provided as a general guide to give you an overview of the tour. The final itinerary can be customized to suit the season, your interests and preferred duration.</p>

                    <div class="tour-section">
                        <h2>What's Included</h2>
                        <div class="included-excluded">
                            <div class="included">
                                <h3>Included</h3>
                                <ul>
                                    <li>Accommodation in certified hotels</li>
                                    <li>All meals (breakfast, lunch, dinner)</li>
                                    <li>English-speaking guide</li>
                                    <li>Private transportation (Toyota Innova/Hiace)</li>
                                    <li>All entrance fees and permits</li>
                                    <li>Sustainable Development Fee (SDF)</li>
                                </ul>
                            </div>
                            <div class="excluded">
                                <h3>Not Included</h3>
                                <ul>
                                    <li>International flights</li>
                                    <li>Travel insurance</li>
                                    <li>Personal expenses</li>
                                    <li>Alcoholic beverages</li>
                                    <li>Tips and gratuities</li>
                                    <li>Optional activities</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tour-section">
                        <h2>Accommodation Options</h2>
                        <p>You can choose from a range of certified accommodations:</p>
                        <ul class="accommodation-options">
                            <li><strong>3-Star Hotels:</strong> Comfortable and clean with essential amenities</li>
                            <li><strong>4-Star Hotels:</strong> Enhanced comfort with superior facilities</li>
                            <li><strong>5-Star Hotels:</strong> Premium luxury accommodations</li>
                            <li><strong>Boutique Properties:</strong> Unique character-filled hotels</li>
                            <li><strong>Traditional Homestays:</strong> Authentic local experience</li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="tour-sidebar">
                    <div class="booking-card">
                        <?php $duration = $duration ?? 0;
                        include __DIR__ . '/../../includes/templates/form/tourDetailsRequestQuote.html.php'; ?>
                    </div>

                    <div class="share-card">
                        <h4>Share This Tour</h4>
                        <div class="share-buttons">
                            <a href="#" class="share-btn">Facebook</a>
                            <a href="#" class="share-btn">Twitter</a>
                            <a href="#" class="share-btn">Email</a>
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
    <?php include __DIR__ . '/../../includes/templates/footer.html.php'; ?>

    <script>
        <?php include __DIR__ . '/../../Js/javascript.js';
        include __DIR__ . '/../../Js/filter_country.js'; ?>
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