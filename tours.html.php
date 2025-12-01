<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Tours - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'includes/templates/header.html.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero tours-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Tours for Every Dream</h1>
            <p>Choose from our carefully curated tour packages, each designed to offer a unique perspective of Bhutan's beauty and culture</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="tour-filters">
        <div class="container">
            <div class="filters-wrapper">
                <div class="filter-group">
                    <label for="duration">Duration</label>
                    <select id="duration">
                        <option value="">All Durations</option>
                        <option value="5">5 Days</option>
                        <option value="6">6 Days</option>
                        <option value="7">7 Days</option>
                        <option value="8">8 Days</option>
                        <option value="9">9+ Days</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="type">Tour Type</label>
                    <select id="type">
                        <option value="">All Types</option>
                        <option value="cultural">Cultural</option>
                        <option value="adventure">Adventure</option>
                        <option value="spiritual">Spiritual</option>
                        <option value="honeymoon">Honeymoon</option>
                    </select>
                </div>
                <!-- <div class="filter-group">
                    <label for="difficulty">Difficulty</label>
                    <select id="difficulty">
                        <option value="">All Levels</option>
                        <option value="easy">Easy</option>
                        <option value="moderate">Moderate</option>
                        <option value="challenging">Challenging</option>
                    </select>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Tours Grid -->
    <section class="tours-listing">
        <div class="container">
            <div class="tours-grid-extended">
                <!-- Tour 1 -->
                <div class="tour-card-extended">
                    <div class="tour-image-extended">
                        <img src="public/paro.jpeg" alt="Quick Bhutan Getaway">
                        <div class="tour-badge">5 Days</div>
                        <!-- <div class="tour-difficulty easy">Easy</div> -->
                    </div>
                    <div class="tour-content-extended">
                        <h3>Quick Bhutan Getaway</h3>
                        <p class="tour-tagline">Perfect introduction to the Land of Happiness</p>
                        <p class="tour-description">The perfect package for travelers who wish to experience the essence of Bhutan in a short time. Check the iconic Tiger's Nest Monastery off your travel list while gaining a brief yet enriching glimpse into the country's natural beauty, unique culture, and way of life.</p>

                        <div class="tour-highlights-extended">
                            <h4>Tour Highlights</h4>
                            <ul>
                                <li>Hike to the legendary Taktsang Monastery (Tiger's Nest)</li>
                                <li>Explore Thimphu's cultural landmarks</li>
                                <li>Visit Punakha Dzong and Chhimi Lhakhang</li>
                                <li>Experience authentic Bhutanese cuisine</li>
                            </ul>
                        </div>

                        <div class="tour-destinations">
                            <strong>Destinations:</strong> Thimphu, Punakha, Paro, Wangduephodrang
                        </div>

                        <div class="tour-actions">
                            <a href="tour-detail.html.php" class="btn btn-primary">View Details</a>
                            <a href="contact.html.php" class="btn btn-outline">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Tour 2 -->
                <div class="tour-card-extended">
                    <div class="tour-image-extended">
                        <img src="public/black-necked-crane.jpg" alt="Taste of Happiness">
                        <div class="tour-badge">6 Days</div>
                        <!-- <div class="tour-difficulty easy">Easy</div> -->
                    </div>
                    <div class="tour-content-extended">
                        <h3>Taste of Happiness</h3>
                        <p class="tour-tagline">Immerse in Bhutan's rich culture and landscapes</p>
                        <p class="tour-description">This tour package is designed to immerse you in Bhutan's rich culture and breathtaking landscapes. Experience the natural beauty of Phobjikha and Gangtey Valleys, home to the rare black-necked cranes.</p>

                        <div class="tour-highlights-extended">
                            <h4>Tour Highlights</h4>
                            <ul>
                                <li>Discover Phobjikha and Gangtey valleys</li>
                                <li>Visit Gangtey Monastery</li>
                                <li>Explore Punakha Dzong</li>
                                <li>Tiger's Nest hike in Paro</li>
                            </ul>
                        </div>

                        <div class="tour-destinations">
                            <strong>Destinations:</strong> Thimphu, Punakha, Paro, Gangtey & Phobjikha
                        </div>

                        <div class="tour-actions">
                            <a href="tour2.html.php" class="btn btn-primary">View Details</a>
                            <a href="contact.html.php" class="btn btn-outline">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Tour 3 -->
                <div class="tour-card-extended">
                    <div class="tour-image-extended">
                        <img src="public/image 4.jpg" alt="The Living Heritage">
                        <div class="tour-badge">7 Days</div>
                        <!-- <div class="tour-difficulty moderate">Moderate</div> -->
                    </div>
                    <div class="tour-content-extended">
                        <h3>The Living Heritage</h3>
                        <p class="tour-tagline">Where ancient traditions meet natural beauty</p>
                        <p class="tour-description">Discover Bhutan, the Land of the Thunder Dragon through a journey that celebrates its living heritage, where ancient traditions blend seamlessly with the natural beauty of the Kingdom.</p>

                        <div class="tour-highlights-extended">
                            <h4>Tour Highlights</h4>
                            <ul>
                                <li>Complete cultural journey through multiple valleys</li>
                                <li>Visit sacred monasteries and heritage sites</li>
                                <li>Experience Phobjikha Valley's tranquility</li>
                                <li>Scenic drives through mountain passes</li>
                            </ul>
                        </div>

                        <div class="tour-destinations">
                            <strong>Destinations:</strong> Thimphu, Punakha, Paro, Gangtey & Phobjikha
                        </div>

                        <div class="tour-actions">
                            <a href="tour3.html.php" class="btn btn-primary">View Details</a>
                            <a href="contact.html.php" class="btn btn-outline">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Tour 4 -->
                <div class="tour-card-extended">
                    <div class="tour-image-extended">
                        <img src="public/image 5.png" alt="Journey Through Culture">
                        <div class="tour-badge">8 Days</div>
                        <!-- <div class="tour-difficulty moderate">Moderate</div> -->
                    </div>
                    <div class="tour-content-extended">
                        <h3>Journey Through Culture</h3>
                        <p class="tour-tagline">Experience Bhutan's rich heritage and spirituality</p>
                        <p class="tour-description">Experience Bhutan's rich heritage, spirituality, and natural beauty through an immersive cultural journey. This tour blends history, culture, and nature for a true taste of Bhutanese life.</p>

                        <div class="tour-highlights-extended">
                            <h4>Tour Highlights</h4>
                            <ul>
                                <li>Extended exploration of cultural landmarks</li>
                                <li>Traditional Bhutanese experiences</li>
                                <li>Visit multiple dzongs and monasteries</li>
                                <li>Participate in local activities</li>
                            </ul>
                        </div>

                        <div class="tour-destinations">
                            <strong>Destinations:</strong> Thimphu, Punakha, Paro, Gangtey & Phobjikha
                        </div>

                        <div class="tour-actions">
                            <a href="tour4.html.php" class="btn btn-primary">View Details</a>
                            <a href="contact.html.php" class="btn btn-outline">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Tour 5 -->
                <div class="tour-card-extended">
                    <div class="tour-image-extended">
                        <img src="public/image 6.png" alt="Best of Bhutan">
                        <div class="tour-badge">9 Days</div>
                        <!-- <div class="tour-difficulty moderate">Moderate</div> -->
                    </div>
                    <div class="tour-content-extended">
                        <h3>Best of Bhutan Tours</h3>
                        <p class="tour-tagline">The ultimate Bhutan experience</p>
                        <p class="tour-description">Experience the best of Bhutan on this 9-day Cultural & Nature Tour. Trek to Tiger's Nest, explore Bumthang's spiritual heart, and immerse yourself in authentic Bhutanese culture.</p>

                        <div class="tour-highlights-extended">
                            <h4>Tour Highlights</h4>
                            <ul>
                                <li>Complete Bhutan tour including Bumthang</li>
                                <li>Visit all major destinations and valleys</li>
                                <li>Ancient monasteries and sacred sites</li>
                                <li>Cultural immersion and local experiences</li>
                            </ul>
                        </div>

                        <div class="tour-destinations">
                            <strong>Destinations:</strong> Thimphu, Punakha, Paro, Gangtey, Bumthang
                        </div>

                        <div class="tour-actions">
                            <a href="tour5.html.php" class="btn btn-primary">View Details</a>
                            <a href="contact.html.php" class="btn btn-outline">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Tour 6 - Honeymoon -->
                <div class="tour-card-extended featured-tour">
                    <div class="tour-image-extended">
                        <img src="public/image 7.png" alt="Honeymoon Package">
                        <div class="tour-badge">Customizable</div>
                        <!-- <div class="tour-difficulty easy">Easy</div>
                        <div class="featured-badge">Special</div> -->
                    </div>
                    <div class="tour-content-extended">
                        <h3>Honeymoon: Two Hearts, One Kingdom</h3>
                        <p class="tour-tagline">Celebrate love in the mystical Kingdom of Bhutan</p>
                        <p class="tour-description">Celebrate your love in the most romantic setting—the mystical Kingdom of Bhutan. This special package is designed for couples seeking intimate moments amidst breathtaking landscapes.</p>

                        <div class="tour-highlights-extended">
                            <h4>Tour Highlights</h4>
                            <ul>
                                <li>Romantic experiences and private moments</li>
                                <li>Luxury accommodations</li>
                                <li>Candlelit dinners with mountain views</li>
                                <li>Customized itinerary for couples</li>
                            </ul>
                        </div>

                        <div class="tour-destinations">
                            <strong>Destinations:</strong> Customizable based on preferences
                        </div>

                        <div class="tour-actions">
                            <a href="tour6.html.php" class="btn btn-primary">View Details</a>
                            <a href="contact.html.php" class="btn btn-outline">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accommodation Options -->
    <section class="accommodation-info">
        <div class="container">
            <h2>Accommodation Options</h2>
            <p class="section-intro">Choose from a range of certified accommodations to suit your comfort and budget</p>
            <div class="accommodation-grid">
                <div class="accommodation-card">
                    <h3>3-Star Hotels</h3>
                    <p>Comfortable and clean accommodations with essential amenities and warm Bhutanese hospitality.</p>
                </div>
                <div class="accommodation-card">
                    <h3>4-Star Hotels</h3>
                    <p>Enhanced comfort with superior facilities, excellent service, and beautiful locations.</p>
                </div>
                <div class="accommodation-card">
                    <h3>5-Star Luxury</h3>
                    <p>Premium accommodations offering world-class amenities, spa services, and exceptional dining.</p>
                </div>
                <div class="accommodation-card">
                    <h3>Boutique Properties</h3>
                    <p>Unique, character-filled hotels that blend traditional Bhutanese architecture with modern comfort.</p>
                </div>
                <div class="accommodation-card">
                    <h3>Traditional Homestays</h3>
                    <p>Authentic experience staying with local families, enjoying home-cooked meals and cultural immersion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Can't Find the Perfect Tour?</h2>
                <p>We specialize in creating custom itineraries tailored to your interests, budget, and travel duration.</p>
                <a href="contact.html.php" class="btn btn-primary">Request Custom Tour</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'includes/templates/footer.html.php'; ?>

    <script>
        <?php include 'Js/javascript.js'; ?>
    </script>
</body>

</html>