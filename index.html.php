<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happiness Horizon Travel</title>
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'includes/templates/header.html.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Where Every Journey Begins with Happiness</h1>
            <p class="hero-subtitle">Discover the authentic spirit of Bhutan through immersive cultural experiences,
                sacred monasteries, and breathtaking Himalayan landscapes</p>
            <div class="hero-buttons">
                <a href="#tours" class="btn btn-primary">Explore Our Tours</a>
                <a href="#contact" class="btn btn-secondary">Plan Your Journey</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Welcome to the Land of Happiness</h2>
                    <p>Founded with the vision of spreading happiness beyond borders, Happiness Horizon Travel is
                        dedicated to sharing the true essence of Bhutan—its breathtaking landscapes, vibrant culture,
                        and heartfelt spirit with travelers from around the world.</p>
                    <p>We design authentic, responsible, and unforgettable travel experiences that celebrate Bhutan's
                        natural beauty and rich cultural heritage. From spiritual visits to sacred monasteries and
                        breathtaking hikes through untouched valleys to immersive cultural encounters, every journey is
                        crafted to reveal the soul of the Land of the Thunder Dragon.</p>
                </div>
                <div class="about-features">
                    <div class="feature-card">
                        <div class="feature-icon">🏔️</div>
                        <h3>Authentic Experiences</h3>
                        <p>Connect with Bhutanese life and traditions through genuine cultural immersion</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🙏</div>
                        <h3>Sacred Monasteries</h3>
                        <p>Visit heritage sites rich in spirituality and centuries-old wisdom</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🥾</div>
                        <h3>Breathtaking Hikes</h3>
                        <p>Trek through untouched valleys and pristine Himalayan landscapes</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">✨</div>
                        <h3>Personalized Itineraries</h3>
                        <p>Journeys designed around your interests and comfort</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tours Section -->
    <section id="tours" class="tours">
        <div class="container">
            <div class="section-header">
                <h2>Tours for Every Dream</h2>
                <p>Choose from our carefully curated tour packages, each designed to offer a unique perspective of
                    Bhutan's beauty and culture</p>
            </div>
            <div class="tours-grid">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/paro.jpeg" alt="Quick Bhutan Getaway">
                        <div class="tour-duration">5 Days</div>
                    </div>
                    <div class="tour-content">
                        <h3>Quick Bhutan Getaway</h3>
                        <p>Perfect for travelers who want to experience the essence of Bhutan in a short time, including
                            the iconic Tiger's Nest Monastery.</p>
                        <ul class="tour-highlights">
                            <li>Thimphu, Punakha, Paro</li>
                            <li>Tiger's Nest hike</li>
                            <li>Cultural landmarks</li>
                        </ul>
                        <a href="tour-detail.html.php" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/black-necked-crane.jpg" alt="Taste of Happiness">
                        <div class="tour-duration">6 Days</div>
                    </div>
                    <div class="tour-content">
                        <h3>Taste of Happiness</h3>
                        <p>Immerse yourself in Bhutan's rich culture and breathtaking landscapes, including the serene
                            Phobjikha Valley.</p>
                        <ul class="tour-highlights">
                            <li>Gangtey & Phobjikha Valley</li>
                            <li>Black-necked cranes</li>
                            <li>Cultural immersion</li>
                        </ul>
                        <a href="tour2.html.php" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/image 4.jpg" alt="The Living Heritage">
                        <div class="tour-duration">7 Days</div>
                    </div>
                    <div class="tour-content">
                        <h3>The Living Heritage</h3>
                        <p>Discover Bhutan's living heritage where ancient traditions blend seamlessly with natural
                            beauty.</p>
                        <ul class="tour-highlights">
                            <li>Complete cultural journey</li>
                            <li>Multiple valleys</li>
                            <li>Spiritual experiences</li>
                        </ul>
                        <a href="tour3.html.php" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/image 5.png" alt="Journey Through Culture">
                        <div class="tour-duration">8 Days</div>
                    </div>
                    <div class="tour-content">
                        <h3>Journey Through Culture</h3>
                        <p>Experience Bhutan's rich heritage, spirituality, and natural beauty through an immersive
                            cultural journey.</p>
                        <ul class="tour-highlights">
                            <li>Extended exploration</li>
                            <li>Cultural landmarks</li>
                            <li>Traditional experiences</li>
                        </ul>
                        <a href="tour4.html.php" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="tour-card">
                    <div class="tour-image">
                        <img src="public/image 6.png" alt="Best of Bhutan">
                        <div class="tour-duration">9 Days</div>
                    </div>
                    <div class="tour-content">
                        <h3>Best of Bhutan Tours</h3>
                        <p>The ultimate Bhutan experience including Bumthang, the spiritual heart of Bhutan with ancient
                            monasteries.</p>
                        <ul class="tour-highlights">
                            <li>Complete Bhutan tour</li>
                            <li>Bumthang Valley</li>
                            <li>All major destinations</li>
                        </ul>
                        <a href="tour5.html.php" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="tour-card featured">
                    <div class="tour-image">
                        <img src="public/image 7.png" alt="Honeymoon Package">
                        <div class="tour-duration">Customizable</div>
                    </div>
                    <div class="tour-content">
                        <h3>Honeymoon: Two Hearts, One Kingdom</h3>
                        <p>Celebrate your love in the most romantic setting—the mystical Kingdom of Bhutan.</p>
                        <ul class="tour-highlights">
                            <li>Romantic experiences</li>
                            <li>Private moments</li>
                            <li>Luxury accommodations</li>
                        </ul>
                        <a href="tour6.html.php" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="destinations">
        <div class="container">
            <div class="section-header">
                <h2>Explore Bhutan's Sacred Destinations</h2>
                <p>From ancient fortresses to pristine valleys, discover the places that make Bhutan truly magical</p>
            </div>
            <div class="destinations-grid">
                <div class="destination-card">
                    <img src="public/paro.jpeg" alt="Paro">
                    <div class="destination-overlay">
                        <h3>Paro</h3>
                        <p>Home to the iconic Tiger's Nest Monastery and Bhutan's only international airport</p>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="public/image 8.png" alt="Thimphu">
                    <div class="destination-overlay">
                        <h3>Thimphu</h3>
                        <p>The vibrant capital blending modern life with deep-rooted traditions and a rich cultural heritage</p>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="public/image 10.png" alt="Punakha">
                    <div class="destination-overlay">
                        <h3>Punakha</h3>
                        <p>Ancient capital featuring the magnificent Punakha Dzong and stunning valley views</p>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="public/black-necked-crane.jpg" alt="Phobjikha Valley">
                    <div class="destination-overlay">
                        <h3>Phobjikha Valley</h3>
                        <p>Pristine glacial valley, winter home of black-necked cranes and breathtaking landscapes</p>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="public/image 11.png" alt="Bumthang">
                    <div class="destination-overlay">
                        <h3>Bumthang</h3>
                        <p>The spiritual heart of Bhutan with ancient monasteries <br> and sacred sites</p>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="public/wangdue.jpg" alt="Wangduephodrang">
                    <div class="destination-overlay">
                        <h3>Wangduephodrang</h3>
                        <p>Historic fortress town <br>with stunning valley <br>views</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Festivals Section -->
    <section id="festivals" class="festivals">
        <div class="container">
            <div class="section-header">
                <h2>Experience Bhutan's Vibrant Festivals</h2>
                <p>Witness colorful celebrations that bring Bhutan's culture and spirituality to life</p>
            </div>
            <div class="festivals-grid">
                <a href="festivals.html.php" class="festival-card festival-link" role="link"
                    aria-label="Paro Tshechu - Festivals" title="Paro Tshechu">
                    <h3>Paro Tshechu</h3>
                    <p class="festival-time">Spring</p>
                    <p>Bhutan's most iconic religious festival featuring sacred mask dances and the unfurling of the
                        giant Thongdrel.</p>
                </a>
                <a href="festivals.html.php" class="festival-card festival-link" role="link"
                    aria-label="Thimphu Tshechu - Festivals" title="Thimphu Tshechu">
                    <h3>Thimphu Tshechu</h3>
                    <p class="festival-time">September/October</p>
                    <p>One of Bhutan's largest festivals held at the magnificent Tashichho Dzong in the capital.</p>
                </a>
                <a href="festivals.html.php" class="festival-card festival-link" role="link"
                    aria-label="Black-Necked Crane Festival - Festivals" title="Black-Necked Crane Festival">
                    <h3>Black-Necked Crane Festival</h3>
                    <p class="festival-time">November</p>
                    <p>Celebrate the arrival of endangered cranes in the beautiful Phobjikha Valley.</p>
                </a>
                <a href="festivals.html.php" class="festival-card festival-link" role="link"
                    aria-label="Punakha Domchoe - Festivals" title="Punakha Domchoe">
                    <h3>Punakha Domchoe</h3>
                    <p class="festival-time">February/March</p>
                    <p>Spectacular martial performances and sacred rituals at Punakha Dzong.</p>
                </a>
                <a href="festivals.html.php" class="festival-card festival-link" role="link"
                    aria-label="Jomolhari Mountain Festival - Festivals" title="Jomolhari Mountain Festival">
                    <h3>Jomolhari Mountain Festival</h3>
                    <p class="festival-time">October</p>
                    <p>Highland celebration honoring the coexistence of people and snow leopards.</p>
                </a>
                <a href="festivals.html.php" class="festival-card festival-link" role="link"
                    aria-label="Royal Highland Festival - Festivals" title="Royal Highland Festival">
                    <h3>Royal Highland Festival</h3>
                    <p class="festival-time">Seasonal</p>
                    <p>Experience the unique culture of Bhutan's highland communities in remote Laya.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <div class="container">
            <div class="why-choose-content">
                <div class="why-choose-text">
                    <h2>Why Choose Happiness Horizon Travel</h2>
                    <p class="lead">At Happiness Horizon Travel, we believe every journey should touch the heart and
                        inspire the soul through the authentic values of Bhutan. When you travel with us, you don't just
                        visit Bhutan—you truly experience it.</p>
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">✓</div>
                            <div>
                                <h4>Certified & Approved</h4>
                                <p>All accommodations certified by the Department of Tourism</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">✓</div>
                            <div>
                                <h4>Expert Guides</h4>
                                <p>Friendly, English-speaking guides embodying Bhutanese hospitality</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">✓</div>
                            <div>
                                <h4>Responsible Tourism</h4>
                                <p>Tours reflecting sustainability and community well-being</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">✓</div>
                            <div>
                                <h4>Personalized Service</h4>
                                <p>Itineraries tailored to your interests and travel duration</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-choose-image">
                    <img src="public/Screenshot 2025-10-31 at 12.04.14 PM 1.png" alt="Bhutanese Guide">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Start Your Journey to Happiness</h2>
                    <p>Let us take you beyond the ordinary to the horizon where happiness begins and memories last a
                        lifetime.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true"><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5L4 8V6l8 5 8-5v2z"/></svg>Email:</strong>
                            <p>info@happinesshorizontravel.com</p>
                        </div>
                        <div class="contact-item">
                            <strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true"><path d="M6.62 10.79a15.054 15.054 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1v3.5a1 1 0 01-1 1C10.29 21.5 2.5 13.71 2.5 3.5A1 1 0 013.5 2.5H7a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>Phone:</strong>
                            <p>+975 16108570</p>
                        </div>
                        <div class="contact-item">
                            <strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true"><path d="M20.5 3.5A11.94 11.94 0 0012 0C5.372 0 .001 5.373.001 12A11.94 11.94 0 004.5 20.5L3 24l3.6-1.3A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12 0-1.86-.38-3.63-1.1-5.2zM16.2 14c-.3.8-1.7 1.5-2.4 1.6-.6.1-1.2.1-2.9-.9-2.5-1.5-4-4.2-4.4-4.7-.4-.5-.1-.8.3-1.1.2-.2.5-.3.8-.1.2.1.6.3.9.6.3.3.4.5.6.9.2.4.1.7-.1 1-.2.2-.4.5-.4.8 0 .3.8 1.6 1.9 2.6 1.3 1.2 2.6 1.7 3.1 1.8.5.1 1 .1 1.4-.1.5-.2 1.4-.8 1.7-1.5.3-.6.3-1.1.2-1.2-.1-.2-.7-.3-1.7-.8-.9-.4-1.6-.8-1.9-1.1-.3-.3-.2-.5.1-.8.3-.3.8-.8 1.1-1.1.3-.3.6-.4.8-.3.2.1.6.2 1.1.6.4.3 1 .9 1.2 1.1.2.3.2.8-.1 1.6z"/></svg>WhatsApp:</strong>
                            <p>+975 16108570</p>
                        </div>
                        <div class="contact-item">
                            <strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>Location:</strong>
                            <p>Thimphu, Bhutan</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="people">Number of People</label>
                            <input type="tel" id="people" name="people" required>
                        </div>
                        <div class="form-group">
                            <label for="days">Number of Days</label>
                            <input type="tel" id="days" name="days" required>
                        </div>
                        <div class="form-group">
                            <label for="tour">Interested Tour</label>
                            <select id="tour" name="tour">
                                <option value="">Select a tour</option>
                                <option value="5-day">Quick Bhutan Getaway (5 Days)</option>
                                <option value="6-day">Taste of Happiness (6 Days)</option>
                                <option value="7-day">The Living Heritage (7 Days)</option>
                                <option value="8-day">Journey Through Culture (8 Days)</option>
                                <option value="9-day">Best of Bhutan (9 Days)</option>
                                <option value="honeymoon">Honeymoon Package</option>
                                <option value="custom">Custom Tour</option>
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

                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Send Inquiry</button>
                    </form>
                </div>
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