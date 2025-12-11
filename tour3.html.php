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
    $tourTitle = "The Living Heritage";
    $duration = 7;
    require_once __DIR__ . '/helper/StringHelper.php';
    $stringHelper = new StringHelper(); ?>


    <!-- Tour Detail Hero -->
    <section class="tour-detail-hero" data-hero="public/bg2.jpg">
        <div class="hero-overlay"></div>
        <div class="tour-detail-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html.php">Home</a> / <a href="tours.html.php">Tours</a> / The Living Heritage
                </div>
                <h1>The Living Heritage</h1>
                <p class="tour-subtitle">Experience the rich cultural tapestry of Bhutan</p>
                <div class="tour-quick-info">
                    <div class="quick-info-item">
                        <strong>Duration:</strong> 7 Days / 6 Nights
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
                        <p>Discover Bhutan, the Land of the Thunder Dragon through a journey that celebrates its living heritage, where ancient traditions blend seamlessly with the natural beauty of the Kingdom of Bhutan.</p>
                        <p>This week-long adventure offers an immersive experience into Bhutan’s vibrant culture, spirituality, and pristine landscapes a true reflection of the nation’s enduring heritage and unique way of life.</p>
                    </div>

                    <div class="tour-section">
                        <h2>Tour Highlights</h2>
                        <ul class="highlights-list">
                            <li>Discover Bhutan’s living heritage, where ancient traditions meet natural beauty and spiritual harmony.</li>
                            <li>Explore Thimphu, the vibrant capital blending culture and modernity through its monasteries, museums, and local markets.</li>
                            <li>Visit the magnificent Punakha Dzong</li>
                            <li>Experience the tranquility of Phobjikha Valley, winter home of the rare black-necked cranes</li>
                            <li>Embark on the iconic hike to Tiger’s Nest Monastery (Taktsang) in Paro</li>
                            <li>Immerse yourself in Paro’s rich heritage, ancient temples, and traditional Bhutanese charm.</li>
                            <li>Enjoy scenic drives through mountain passes, including Dochula Pass, with its 108 chortens and Druk Wangyel Lhakhang.</li>
                            <li>Savor authentic Bhutanese cuisine and experience local hospitality with options like a traditional hot stone bath and farmhouse dinner.</li>
                        </ul>
                    </div>

                    <div class="tour-section">
                        <h2>Detailed Itinerary</h2>

                        <div class="accordion" id="itinerary-accordion">

                            <!-- Day 1 -->
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day1-btn" aria-controls="day1-panel">
                                    <span class="day-number">Day 1</span>
                                    <span class="accordion-title">Arrival in Paro/Phuentshogling – Drive to Thimphu</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day1-panel" class="accordion-panel" role="region" aria-labelledby="day1-btn" hidden>
                                    <div class="day-content">
                                        <p>Welcome to Bhutan, the Land of Gross National Happiness! Upon arrival at Paro International Airport you will be warmly greeted by your guide outside the arrival terminal/at the Bhutan Gate Phuentshogling. Enjoy a scenic one and half hour drive to Thimphu, Bhutan’s charming capital city. After checking in to your hotel, you’ll have your first meal in Bhutan either at the hotel or a local restaurant, depending on your choice. </p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Visit National Memorial Chorten</li>
                                            <li>Explore Kaja Throm (Farmers' Market)</li>
                                            <li>Visit Changyul Park</li>
                                            <li>Visit Tashichhoe Dzong</li>
                                            <li>Leisurely stroll around Thimphu town in the evening</li>
                                        </ul>
                                        <p><strong>Accommodation:</strong> Hotel in Thimphu</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 2 -->
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day2-btn" aria-controls="day2-panel">
                                    <span class="day-number">Day 2</span>
                                    <span class="accordion-title">Discover the Cultural Treasures of Thimphu</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day2-panel" class="accordion-panel" role="region" aria-labelledby="day2-btn" hidden>
                                    <div class="day-content">
                                        <p>Spend the day discovering Thimphu, Bhutan’s vibrant capital city, where ancient traditions harmoniously coexist with modern lifestyle.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li>Visit Kuenselphodrang (Buddha Point)</li>
                                            <li>Explore Folk Heritage Museum & National Textile Museum</li>
                                            <li>Institute for Zorig Chusum (School of Arts & Crafts)</li>
                                            <li>Visit Takin Preserve</li>
                                            <li>Explore Crafts Market & Clock Tower Square</li>
                                            <li>Visit Changangkha Lhakhang</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 3 -->
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day3-btn" aria-controls="day3-panel">
                                    <span class="day-number">Day 3</span>
                                    <span class="accordion-title">Drive to Gangtey and Phobjikha Valley(Approx. 5–6 hours’ drive)</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day3-panel" class="accordion-panel" role="region" aria-labelledby="day3-btn" hidden>
                                    <div class="day-content">
                                        <p>After breakfast depart from Thimphu for a scenic drive to Gangtey and Phobjikha Valley. Enjoy winding mountain roads, lush forests, and traditional villages with photo stops along the way.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li><strong>Arrive Gangtey:</strong>
                                                Visit Gangtey Monastery (Gangtey Gonpa), a 17th-century spiritual center perched above the valley, offering panoramic views and a serene atmosphere
                                            </li>
                                            <li>Visit <strong>Phobjikha Valley</strong>: known for its pristine meadows, traditional farmhouses, and as the winter home of the rare black-necked cranes</li>
                                            <li>Overnight in Gangtey:
                                                Check in to a comfortable hotel or a cozy farmhouse, and enjoy a warm dinner while experiencing authentic Bhutanese hospitality and countryside life.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 4 -->
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day4-btn" aria-controls="day4-panel">
                                    <span class="day-number">Day 4</span>
                                    <span class="accordion-title">Drive from Gangtey to Punakha (Approx. 5–6 hours)</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day4-panel" class="accordion-panel" role="region" aria-labelledby="day4-btn" hidden>
                                    <div class="day-content">
                                        <p>After breakfast in Gangtey, begin your scenic drive towards Punakha, passing through forests, villages, and winding mountain roads with panoramic Himalayan views.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li><strong>Scenic Stop at Pelela Pass:</strong>
                                                one of Bhutan’s high mountain passes.
                                            </li>
                                            <li><strong>Lunch in Wangdue:</strong>
                                                Stop for lunch in Wangdue Phodrang, the town famous for its historical dzong and picturesque landscapes
                                            </li>
                                            <li>Visit Wangdue Phodrang Dzong</li>
                                            <li>Visit Chhimi Lhakhang (Temple of Fertility)</li>
                                            <li>Explore Woolakha Nunnery</li>
                                            <li>Visit Punakha Dzong</li>
                                            <li>Overnight in Punakha</li>
                                        </ul>
                                        <p><strong>Optional Activities in Punakha:</strong></p>
                                        <ul>
                                            <li>Stroll through the local farmers’ market to experience village life</li>
                                            <li>Walk across Bhutan’s longest suspension bridge for scenic river valley views</li>
                                            <li>River rafting on Pho Chhu or Mo Chhu rivers (optional)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 5 -->
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day5-btn" aria-controls="day5-panel">
                                    <span class="day-number">Day 5</span>
                                    <span class="accordion-title">Drive from Punakha to Paro (Approx. 4–5 hours including stops)</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day5-panel" class="accordion-panel" role="region" aria-labelledby="day5-btn" hidden>
                                    <div class="day-content">
                                        <p>After breakfast in Punakha, begin the scenic drive towards Paro, passing through lush valleys, forests, and winding mountain roads.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li><strong>Scenic Stop at Chelela Pass:</strong>
                                                the highest motorable pass in Bhutan, offering panoramic views of the Himalayan peaks and pristine landscapes.
                                            </li>
                                            <li>Paro Sightseeing</li>
                                            <li>Visit National Museum (Ta Dzong)</li>
                                            <li>Rinpung Dzong</li>
                                            <li>Nyamed Zam</li>
                                            <li>Lunch – Farmhouse Experience</li>
                                            <li><strong>Cultural Experiences:</strong>
                                                Participate in Bhutanese archery, the national sport, and try your hand at Khuru (dart game) alongside locals for a fun cultural immersion
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 6 -->
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day6-btn" aria-controls="day6-panel">
                                    <span class="day-number">Day 6</span>
                                    <span class="accordion-title">Hike to Taktsang Monastery</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day6-panel" class="accordion-panel" role="region" aria-labelledby="day6-btn" hidden>
                                    <div class="day-content">
                                        <p>Embark on a memorable hike to the sacred Taktsang Monastery, perched on a cliff above the Paro Valley. The trail winds through pine forests adorned with colorful prayer flags and offers breathtaking views at every turn.</p>
                                        <p><strong>Activities:</strong></p>
                                        <ul>
                                            <li><strong>Explore the Monastery:</strong>
                                                Upon reaching the monastery, immerse yourself in its serene atmosphere and spiritual energy. Taktsang is one of Bhutan’s most revered pilgrimage sites, believed to be where Guru Padmasambhava (Guru Rinpoche), the saint who introduced Buddhism to Bhutan, arrived on the back of a flying tigress and meditated in a cave.
                                            </li>
                                            <li>Lunch in Paro</li>
                                            <li>Afternoon Visit to Kyichu Lhakhang</li>
                                            <li>Explore Paro Town</li>
                                        </ul>
                                        <p class="farewell">Tashi Delek! May the blessings of Bhutan accompany you wherever you go.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 7 -->
                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day7-btn" aria-controls="day7-panel">
                                    <span class="day-number">Day 7</span>
                                    <span class="accordion-title">Departure from Paro or Drive to Phuentsholing for Land Exit</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day7-panel" class="accordion-panel" role="region" aria-labelledby="day7-btn" hidden>
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
                            <span>7 Days / 6 Nights</span>
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
                        <a href="tour-detail.html.php" class="btn btn-outline">View Details</a>
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