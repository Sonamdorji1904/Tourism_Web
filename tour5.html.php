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
    <link rel="stylesheet" href="Css/tour.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'includes/templates/header.html.php';
    $tourTitle = "Best of Bhutan Tours";
    $duration = 9;
    require_once __DIR__ . '/helper/StringHelper.php';
    $stringHelper = new StringHelper(); ?>


    <!-- Tour Detail Hero -->
    <section class="tour-detail-hero" data-hero="public/bg2.jpg">
        <div class="hero-overlay"></div>
        <div class="tour-detail-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html.php">Home</a> / <a href="tours.html.php">Tours</a> / Best of Bhutan Tours
                </div>
                <h1>Best of Bhutan Tours</h1>
                <p class="tour-subtitle">Experience the ultimate journey through Bhutan's cultural and natural wonders.</p>
                <div class="tour-quick-info">
                    <div class="quick-info-item">
                        <strong>Duration:</strong> 9 Days / 8 Nights
                    </div>
                    <div class="quick-info-item">
                        <strong>Best Time:</strong> March - May, Sept - Nov
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
                        <p class="lead">Experience the best of Bhutan on this 9-day Cultural & Nature Tour, a journey through the
                            Himalayas that blends stunning landscapes with rich heritage. Trek to the iconic Tiger’s Nest Monastery in Paro,
                            explore Thimphu’s vibrant capital with its Buddha Dordenma Statue and markets, and visit the majestic Punakha Dzong
                            at the confluence of two rivers. Wander the serene Phobjikha Valley, discover the spiritual heart of Bumthang with its
                            ancient monasteries, and enjoy immersive cultural experiences such as traditional archery, textile weaving, and local cooking.
                            Along the way, savor authentic Bhutanese cuisine, witness colorful festivals, hike through pristine forests, and learn about
                            Bhutan’s unique philosophy of Gross National Happiness, making this an unforgettable journey through nature, culture, and spirituality.</p>
                    </div>

                    <div class="tour-section">
                        <h2>Tour Highlights</h2>
                        <ul class="highlights-list">
                            <li>Soar over the majestic Himalayas and experience a thrilling landing at Paro Airport</li>
                            <li>Explore the scenic and culturally rich Paro Valley</li>
                            <li>Enjoy a guided tour of Punakha, the ancient capital</li>
                            <li>Hike to the legendary Taktsang Monastery (Tiger's Nest)</li>
                            <li>Visit Kyichu Lhakhang, the oldest Buddhist temple in Bhutan</li>
                            <li>Immerse yourself in authentic Bhutanese culture, traditions, and cuisine</li>
                        </ul>
                    </div>

                    <div class="tour-section">
                        <h2>Detailed Itinerary</h2>

                        <div class="accordion" id="itinerary-accordion">
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day1-btn" aria-controls="day1-panel">
                                    <span class="day-number">Day 1</span>
                                    <span class="accordion-title">Arrival in Paro - Drive to Thimphu</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day1-panel" class="accordion-panel" role="region" aria-labelledby="day1-btn" hidden>
                                    <div class="day-content">
                                        <p>Welcome to Bhutan, the Land of Gross National Happiness! Upon arrival at Paro International Airport, you will be warmly greeted by your guide. Enjoy a scenic one and half hour drive to Thimphu, Bhutan's charming capital city.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Visit National Memorial Chorten</li>
                                            <li>Explore Kaja Throm (Farmers' Market)</li>
                                            <li>Visit Buddha Dordenma Statue</li>
                                            <li>Evening stroll around Thimphu town</li>
                                        </ul>
                                        <p><strong>Meals:</strong> Lunch, Dinner</p>
                                        <p><strong>Accommodation:</strong> Hotel in Thimphu</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day2-btn" aria-controls="day2-panel">
                                    <span class="day-number">Day 2</span>
                                    <span class="accordion-title">Thimphu Sightseeing - Drive to Punakha</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day2-panel" class="accordion-panel" role="region" aria-labelledby="day2-btn" hidden>
                                    <div class="day-content">
                                        <p>After breakfast, explore Thimphu's key attractions before driving to Punakha via the scenic Dochula Pass.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Visit Buddha Dordenma and Tashichho Dzong</li>
                                            <li>Stop at Dochula Pass (108 chortens)</li>
                                            <li>Visit Chhimi Lhakhang (Temple of Fertility)</li>
                                            <li>Explore Punakha Dzong</li>
                                        </ul>
                                        <p><strong>Meals:</strong> Breakfast, Lunch, Dinner</p>
                                        <p><strong>Accommodation:</strong> Hotel in Punakha</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day3-btn" aria-controls="day3-panel">
                                    <span class="day-number">Day 3</span>
                                    <span class="accordion-title">Punakha Sightseeing - Drive to Paro</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day3-panel" class="accordion-panel" role="region" aria-labelledby="day3-btn" hidden>
                                    <div class="day-content">
                                        <p>Enjoy a morning hike to Khamsum Yulley Namgyel Chorten, then visit a traditional farmhouse before driving to Paro.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>45-minute hike to Khamsum Yulley Chorten</li>
                                            <li>Traditional lunch at local farmhouse</li>
                                            <li>Visit Wangduephodrang Dzong</li>
                                            <li>Drive to Paro</li>
                                        </ul>
                                        <p><strong>Meals:</strong> Breakfast, Lunch, Dinner</p>
                                        <p><strong>Accommodation:</strong> Hotel in Paro</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day4-btn" aria-controls="day4-panel">
                                    <span class="day-number">Day 4</span>
                                    <span class="accordion-title">Hike to Taktsang Monastery (Tiger's Nest)</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day4-panel" class="accordion-panel" role="region" aria-labelledby="day4-btn" hidden>
                                    <div class="day-content">
                                        <p>Embark on one of Bhutan's most iconic experiences—the hike to Taktsang Monastery, perched 900 meters above the Paro Valley.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Hike to Tiger's Nest Monastery (3-4 hours round trip)</li>
                                            <li>Visit Kyichu Lhakhang</li>
                                            <li>Explore Paro town</li>
                                            <li>Hot stone bath and farmhouse dinner (optional)</li>
                                        </ul>
                                        <p><strong>Meals:</strong> Breakfast, Lunch, Dinner</p>
                                        <p><strong>Accommodation:</strong> Hotel in Paro</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day5-btn" aria-controls="day5-panel">
                                    <span class="day-number">Day 5</span>
                                    <span class="accordion-title">Departure from Paro</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day5-panel" class="accordion-panel" role="region" aria-labelledby="day5-btn" hidden>
                                    <div class="day-content">
                                        <p>After an early breakfast, we will drop you to Paro International Airport for your onward flight. We hope your journey has been filled with unforgettable experiences and beautiful memories.</p>
                                        <p><strong>Meals:</strong> Breakfast</p>
                                        <p class="farewell">Tashi Delek! May the blessings of Bhutan accompany you wherever you go.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day6-btn" aria-controls="day6-panel">
                                    <span class="day-number">Day 6</span>
                                    <span class="accordion-title">Departure from Paro</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day6-panel" class="accordion-panel" role="region" aria-labelledby="day6-btn" hidden>
                                    <div class="day-content">
                                        <p>After an early breakfast, we will drop you to Paro International Airport for your onward flight. We hope your journey has been filled with unforgettable experiences and beautiful memories.</p>
                                        <p><strong>Meals:</strong> Breakfast</p>
                                        <p class="farewell">Tashi Delek! May the blessings of Bhutan accompany you wherever you go.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day7-btn" aria-controls="day7-panel">
                                    <span class="day-number">Day 7</span>
                                    <span class="accordion-title">Departure from Paro</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day7-panel" class="accordion-panel" role="region" aria-labelledby="day7-btn" hidden>
                                    <div class="day-content">
                                        <p>After an early breakfast, we will drop you to Paro International Airport for your onward flight. We hope your journey has been filled with unforgettable experiences and beautiful memories.</p>
                                        <p><strong>Meals:</strong> Breakfast</p>
                                        <p class="farewell">Tashi Delek! May the blessings of Bhutan accompany you wherever you go.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day8-btn" aria-controls="day8-panel">
                                    <span class="day-number">Day 8</span>
                                    <span class="accordion-title">Departure from Paro or Drive to Phuentsholing for Land Exit</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day8-panel" class="accordion-panel" role="region" aria-labelledby="day8-btn" hidden>
                                    <div class="day-content">
                                        <p>We will bid a fond farewell to the enchanting Kingdom of Bhutan. After an early breakfast, we will either drop to Paro International Airport for your onward flight home or to your next destination, or we will drive to Phuentsholing to exit Bhutan via the land border.</p>
                                        <p class="farewell">Tashi Delek! We look forward to welcoming you back to this land of timeless beauty and endless enchantment.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day9-btn" aria-controls="day9-panel">
                                    <span class="day-number">Day 9</span>
                                    <span class="accordion-title">Departure from Paro</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day9-panel" class="accordion-panel" role="region" aria-labelledby="day9-btn" hidden>
                                    <div class="day-content">
                                        <p>After an early breakfast, we will drop you to Paro International Airport for your onward flight. We hope your journey has been filled with unforgettable experiences and beautiful memories.</p>
                                        <p><strong>Meals:</strong> Breakfast</p>
                                        <p class="farewell">Tashi Delek! May the blessings of Bhutan accompany you wherever you go.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

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
                        <?php include 'includes/templates/form/tourDetailsRequestQuote.html.php'; ?>
                    </div>

                    <div class="tour-info-card">
                        <h4>Tour Information</h4>
                        <div class="info-item">
                            <strong>Duration:</strong>
                            <span>5 Days / 4 Nights</span>
                        </div>
                        <!-- <div class="info-item">
                            <strong>Difficulty:</strong>
                            <span>Easy</span>
                        </div> -->
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
                            <span>Thimphu, Punakha, Paro, Gangtey & Phobjikha in W/phodrang and Bumthang</span>
                        </div>
                    </div>

                    <div class="share-card">
                        <h4>Share This Tour</h4>
                        <div class="share-buttons">
                            <a href="#" class="share-btn">Facebook</a>
                            <a href="#" class="share-btn">Twitter</a>
                            <a href="mailto:info@happinesshorizontravel.com" class="share-btn">Email</a>
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
                        <a href="tour2.html.php" class="btn btn-outline">View Details</a>
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
                        <a href="tour3.html.php" class="btn btn-outline">View Details</a>
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