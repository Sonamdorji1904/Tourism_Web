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
    $tourTitle = "Taste of Happiness";
    $duration = 6;
    require_once __DIR__ . '/helper/StringHelper.php';
    $stringHelper = new StringHelper(); ?>


    <!-- Tour Detail Hero -->
    <section class="tour-detail-hero" data-hero="public/bg2.jpg">
        <div class="hero-overlay"></div>
        <div class="tour-detail-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html.php">Home</a> / <a href="tours.html.php">Tours</a> / Taste of Happiness
                </div>
                <h1>Taste of Happiness</h1>
                <p class="tour-subtitle">Experience the essence of Bhutan in 6 unforgettable Days</p>
                <div class="tour-quick-info">
                    <div class="quick-info-item">
                        <strong>Duration:</strong> 6 Days / 5 Nights
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
                        <p class="lead">This tour package is designed to immerse you in Bhutan’s rich culture and breathtaking landscapes, allowing you to truly experience the Taste of Happiness. Begin your journey in Thimphu, explore the historic sites of Punakha, experience the natural beauty of Phobjikha and Gangtey Valleys, and admire the majestic Wangduephodrang Dzong. Your adventure culminates with a memorable hike to the iconic Paro Taktshang (Tiger’s Nest Monastery). With expert guides and authentic experiences, this package offers a truly immersive cultural journey through the Land of Happiness.</p>

                    </div>

                    <div class="tour-section">
                        <h2>Tour Highlights</h2>
                        <ul class="highlights-list">
                            <li>Discover Bhutan’s vibrant capital city, blending modern life with deep-rooted traditions. Visit cultural landmarks, bustling markets, and sacred sites</li>
                            <li>Explore the magnificent Punakha Dzong, one of Bhutan’s most beautiful fortresses, set at the confluence of two rivers. Enjoy the serene countryside and lush valleys</li>
                            <li>Experience the pristine beauty of the Phobjikha and Gangtey valleys, home to the rare black-necked cranes, and visit the tranquil Gangtey Monastery surrounded by breathtaking scenery.</li>
                            <li>Journey to the iconic Paro Taktshang (Tiger’s Nest Monastery), perched on a cliffside</li>
                            <li>Explore Paro’s historic sites, charming town, and serene landscapes</li>
                        </ul>
                    </div>

                    <div class="tour-section">
                        <h2>Detailed Itinerary</h2>

                        <div class="accordion" id="itinerary-accordion">

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day1-btn" aria-controls="day1-panel">
                                    <span class="day-number">Day 1</span>
                                    <span class="accordion-title">Arrival in Paro/Phuentsholing - Drive to Thimphu</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day1-panel" class="accordion-panel" role="region" aria-labelledby="day1-btn" hidden>
                                    <div class="day-content">
                                        <p>Welcome to Bhutan, the Land of Gross National Happiness! Upon arrival at Paro International Airport you will be warmly greeted by your guide outside the arrival terminal/at the Bhutan Gate Phuentshogling. Enjoy a scenic one and half hour drive to Thimphu, Bhutan’s charming capital city. After checking in to your hotel, you’ll have your first meal in Bhutan either at the hotel or a local restaurant, depending on your choice.</p>
                                        <p>In the afternoon, explore Thimphu at a relaxed pace, with activities tailored to your interests. Some must-see attractions include:</p>
                                        <ul>
                                            <li>Visit National Memorial Chorten</li>
                                            <li>Explore Kaja Throm (Farmers' Market)</li>
                                            <li>Visit Changyul Park</li>
                                            <li>Visit Folk Heritage Museum & National Textile Museum</li>
                                            <li>Evening stroll around Thimphu town</li>
                                            <li>Visit Crafts Markets</li>
                                        </ul>

                                        <p>In the event you choose to enter from Phuentshogling our guide will receive you at the Phuentshogling Bhutan gate</p>
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
                                        <p>Start your day with a delicious breakfast at your hotel before exploring some of Thimphu’s key attractions.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Visit Buddha Dordenma</li>
                                            <li>Drive to Punakha via Dochula Pass (108 chortens)</li>
                                            <li>Visit Chhimi Lhakhang (Temple of Fertility)</li>
                                            <li>Explore Woolakha Nunnery</li>
                                            <li>Visit Punakha Dzong</li>
                                        </ul>
                                        <p><strong>Optional Activities:</strong></p>
                                        <ul>
                                            <li>Stroll through the local farmers’ market to experience Bhutanese village life</li>
                                            <li>Walk across Bhutan’s longest suspension bridge</li>
                                            <li>For adventure lovers, opt for river rafting on the Pho Chhu or Mo Chhu rivers</li>
                                        </ul>
                                        <p><strong>Accommodation:</strong> Hotel in Punakha</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day3-btn" aria-controls="day3-panel">
                                    <span class="day-number">Day 3</span>
                                    <span class="accordion-title">Drive to Gangtey and Phobjikha Valley</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day3-panel" class="accordion-panel" role="region" aria-labelledby="day3-btn" hidden>
                                    <div class="day-content">
                                        <p>Enjoy a beautiful drive to Gangtey Valley, passing through forests, villages, and mountain roads with amazing views of the countryside.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Visit Gangtey monastery</li>
                                            <li>Visit Phobjikha Valley and immerse in its natural beauty</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day4-btn" aria-controls="day4-panel">
                                    <span class="day-number">Day 4</span>
                                    <span class="accordion-title">Drive to Paro</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day4-panel" class="accordion-panel" role="region" aria-labelledby="day4-btn" hidden>
                                    <div class="day-content">
                                        <p>After breakfast, begin your scenic drive from Gangtey Valley towards Paro, passing through beautiful forests, quaint villages, and winding mountain roads with breathtaking countryside views.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Scenic Stop at Pelela Pass</li>
                                            <li>Visit Wangdue Phodrang Dzong</li>
                                            <li>Arrival in Paro and explore town</li>
                                        </ul>
                                        <p><strong>Accommodation:</strong> Hotel in Paro</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day5-btn" aria-controls="day5-panel">
                                    <span class="day-number">Day 5</span>
                                    <span class="accordion-title">Hike to Taktsang Monastery</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day5-panel" class="accordion-panel" role="region" aria-labelledby="day5-btn" hidden>
                                    <div class="day-content">
                                        <p>Start your day with a hearty breakfast before setting out for the hike to Taktsang Monastery (Tiger’s Nest).</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Hike to Taktsang Monastery (3 -4 hours hours round trip)</li>
                                            <li>Stop at the <strong>Taktsang Cafeteria</strong>, where you can rest, enjoy tea or snacks, and take in a stunning view of the monastery clinging to the cliffs.</li>
                                            <li><strong>Lunch in Paro:</strong>
                                                After descending, return to Paro town and enjoy a sumptuous local lunch at a nearby restaurant.
                                            </li>
                                            <li>Explore Paro town</li>
                                            <li>Evening at a Traditional Farmhouse</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day6-btn" aria-controls="day6-panel">
                                    <span class="day-number">Day 6</span>
                                    <span class="accordion-title">Departure from Paro or Drive to Phuentsholing</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day6-panel" class="accordion-panel" role="region" aria-labelledby="day6-btn" hidden>
                                    <div class="day-content">
                                        <p>We will bid a fond farewell to the enchanting Kingdom of Bhutan. After an early breakfast, we will either drop to Paro International Airport for your onward flight home or to your next destination, or we will drive to Phuentsholing to exit Bhutan via the land border.</p>
                                        <p>We hope your journey has been filled with new friendships, unforgettable experiences, and countless beautiful memories of this Himalayan paradise. May the blessings of Bhutan accompany you wherever you go.</p>
                                        <p class="farewell">Tashi Delek! May the blessings of Bhutan accompany you wherever you go.</p>
                                    </div>
                                </div>
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
                        <?php include 'includes/templates/form/tourDetailsRequestQuote.html.php'; ?>
                    </div>

                    <div class="tour-info-card">
                        <h4>Tour Information</h4>
                        <div class="info-item">
                            <strong>Duration:</strong>
                            <span>6 Days / 5 Nights</span>
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
                            <span>Thimphu, Punakha, Paro and Gangtey & Phobjikha in Wangduephodrang</span>
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