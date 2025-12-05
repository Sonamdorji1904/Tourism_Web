<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Bhutan Getaway - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="/Happiness%20horizone/Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Accordion styles for itinerary -->
    <style>
        .accordion {
            margin-top: 16px;
        }

        .accordion-item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        }

        .accordion-button {
            width: 100%;
            background: transparent;
            border: 0;
            padding: 18px 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            text-align: left;
            font-weight: 600;
            font-size: 16px;
            gap: 12px;
        }

        .accordion-button:focus {
            outline: 2px solid #7fbf7a;
            outline-offset: 2px;
        }

        .accordion-button .day-number {
            background: #e9f4ea;
            color: #1a4d2e;
            padding: 6px 10px;
            border-radius: 6px;
            font-weight: 700;
        }

        .accordion-panel {
            overflow: hidden;
            max-height: 0;
            transition: max-height .28s ease, padding .2s ease;
            padding: 0 12px;
        }

        .accordion-button[aria-expanded="true"]+.accordion-panel {
            max-height: 1200px;
            padding: 12px;
        }

        .itinerary-day .day-header {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .itinerary-day .day-content p,
        .itinerary-day .day-content ul {
            margin: 8px 0;
        }

        .similar-tours .container>h2 {
            margin-bottom: 20px;
        }

        .similar-tours .tours-grid {
            margin-top: 12px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php require_once __DIR__ . '/../../includes/templates/adminHeader.html.php';
    require_once __DIR__ . '/../../helper/StringHelper.php';
    $stringHelper = new StringHelper();
    require_once __DIR__ . '/../get_tour_details.php';
    require_once __DIR__ . '/../../controller/connects/TourCard.php';
    ?>

    <!-- Tour Detail Hero -->
    <section class="tour-detail-hero" data-hero="/Happiness%20horizone/public/bg2.jpg">
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
                                $accommodation_options = $tourItineraries[$i]['accommodation'] ?? '';
                                $buttonId = 'day' . ($i + 1) . '-btn';
                                $panelId = 'day' . ($i + 1) . '-panel';
                                include __DIR__ . '/../../includes/templates/tour/tourItinerary.html.php';
                            }
                            ?>
                            <div class="tour-actions">
                                <a href="../admin/tour_detailed_itinerary.php?tour_id=<?= $tourId ?>" class="btn btn-primary">Add tour Itinerary</a>
                            </div>
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
                        <h3>Book This Tour</h3>
                        <div class="price-info">
                            <p class="price-note">Price varies based on group size and accommodation choice</p>
                        </div>
                        <form class="quick-booking-form" action="./controller/submit_contact.php" method="post">
                            <div class="form-group">
                                <label>Full Name *</label>
                                <input type="text" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="country">Country *</label>
                                <input type="country" id="country" name="country" required>
                            </div>
                            <div class="form-group">
                                <label>Travel Date</label>
                                <input type="date" name="travelDate" required>
                            </div>
                            <div class="form-group">
                                <label>Number of Travelers</label>
                                <input type="number" min="1" value="2" name="travelers" required>
                            </div>
                            <div class="form-group">
                                <label>Accommodation</label>
                                <select name="accomodation" required>
                                    <option value="">Select</option>
                                    <option value="3star">3-Star Hotel</option>
                                    <option value="4star">4-Star Hotel</option>
                                    <option value="5star">5-Star Hotel</option>
                                    <option value="boutique">Boutique Property</option>
                                    <option value="homestay">Homestay</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="meal">Meal Types</label>
                                <select id="meal" name="meal">
                                    <option value="">Select a meal type (optional)</option>
                                    <option value="EP">European Plan (EP)</option>
                                    <option value="CP">Continental Plan (CP)</option>
                                    <option value="BP">Bermuda Plan (BP)</option>
                                    <option value="MAP">Modified American Plan (MAP)</option>
                                    <option value="AP">American Plan (AP)</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-full">Request Quote</button>
                        </form>
                        <div class="contact-options">
                            <p>Or contact us directly:</p>
                            <a href="tel:+97516108570" class="contact-link"><svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
                                    <path d="M6.62 10.79a15.054 15.054 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1v3.5a1 1 0 01-1 1C10.29 21.5 2.5 13.71 2.5 3.5A1 1 0 013.5 2.5H7a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.01l-2.2 2.2z" />
                                </svg>+975 16108570</a>
                            <a href="mailto:info@happinesshorizontravel.com" class="contact-link"><svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
                                    <path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5L4 8V6l8 5 8-5v2z" />
                                </svg>Email Us</a>
                            <a href="#" class="contact-link"><svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
                                    <path d="M20.5 3.5A11.94 11.94 0 0012 0C5.372 0 .001 5.373.001 12A11.94 11.94 0 004.5 20.5L3 24l3.6-1.3A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12 0-1.86-.38-3.63-1.1-5.2zM16.2 14c-.3.8-1.7 1.5-2.4 1.6-.6.1-1.2.1-2.9-.9-2.5-1.5-4-4.2-4.4-4.7-.4-.5-.1-.8.3-1.1.2-.2.5-.3.8-.1.2.1.6.3.9.6.3.3.4.5.6.9.2.4.1.7-.1 1-.2.2-.4.5-.4.8 0 .3.8 1.6 1.9 2.6 1.3 1.2 2.6 1.7 3.1 1.8.5.1 1 .1 1.4-.1.5-.2 1.4-.8 1.7-1.5.3-.6.3-1.1.2-1.2-.1-.2-.7-.3-1.7-.8-.9-.4-1.6-.8-1.9-1.1-.3-.3-.2-.5.1-.8.3-.3.8-.8 1.1-1.1.3-.3.6-.4.8-.3.2.1.6.2 1.1.6.4.3 1 .9 1.2 1.1.2.3.2.8-.1 1.6z" />
                                </svg>WhatsApp</a>
                        </div>
                    </div>

                    <div class="tour-info-card">
                        <h4>Tour Information</h4>
                        <div class="info-item">
                            <strong>Duration:</strong>
                            <span>6 Days / 5 Nights</span>
                        </div>

                        <div class="info-item">
                            <strong>Group Size:</strong>
                            <span>2-15 people</span>
                        </div>
                        <div class="info-item">
                            <strong>Best Season:</strong>
                            <span>Mar-May, Sep-Nov</span>
                        </div>
                        <div class="info-item">
                            <strong>Destinations:</strong>
                            <span>Thimphu, Punakha, Paro and Gangtey & Phobjikha in Wangduephodrang</span>
                        </div>
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
        <?php include __DIR__ . '/../../Js/javascript.js'; ?>
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