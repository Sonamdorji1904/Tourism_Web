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
    <style>
        .accordion { margin-top: 16px; }
        .accordion-item { border-bottom: 1px solid rgba(0,0,0,0.06); }
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
        .accordion-button:focus{ outline: 2px solid #7fbf7a; outline-offset: 2px; }
        .accordion-button .day-number { background:#e9f4ea; color:#1a4d2e; padding:6px 10px; border-radius:6px; font-weight:700; }
        .accordion-panel { overflow: hidden; max-height: 0; transition: max-height .28s ease, padding .2s ease; padding: 0 12px; }
        .accordion-button[aria-expanded="true"] + .accordion-panel { max-height: 1200px; padding: 12px; }
        .itinerary-day .day-header { display: flex; gap: 12px; align-items: center; }
        .itinerary-day .day-content p, .itinerary-day .day-content ul { margin: 8px 0; }
        .similar-tours .container > h2 { margin-bottom: 20px; }
        .similar-tours .tours-grid { margin-top: 12px; }

        /* ensure the middle title shrinks and the chevron stays at the far right */
        .accordion-button .accordion-title { flex: 1 1 auto; min-width: 0; }
        .accordion-button .chev { margin-left: auto; flex: 0 0 auto; }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'includes/templates/header.html.php'; ?>


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

                    <form class="contact-form-detailed" action="./controller/submit_contact.php" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country">
                        </div>

                        <div class="form-group">
                            <label for="tour">Interested Tour Package</label>
                            <select id="tour" name="tour">
                                <option value="">Select a tour (optional)</option>
                                <option value="5-day">Quick Bhutan Getaway (5 Days)</option>
                                <option value="6-day">Taste of Happiness (6 Days)</option>
                                <option value="7-day">The Living Heritage (7 Days)</option>
                                <option value="8-day">Journey Through Culture (8 Days)</option>
                                <option value="9-day">Best of Bhutan (9 Days)</option>
                                <option value="honeymoon">Honeymoon Package</option>
                                <option value="custom">Custom Tour</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="travelers">Number of Travelers</label>
                                <input type="number" id="travelers" name="travelers" min="1" value="1">
                            </div>
                            <div class="form-group">
                                <label for="travelDate">Preferred Travel Date</label>
                                <input type="date" id="travelDate" name="travelDate">
                            </div>
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
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us about your travel plans, interests, and any special requirements..."></textarea>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" required>
                                I agree to receive travel information and updates from Happiness Horizon Travel
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                    </form>
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
                                    <p>info@happinesshorizontravel.com</p>
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
                            <a href="#" class="quick-contact-btn whatsapp">
                                <span></span> WhatsApp
                            </a>
                            <a href="tel:+97516108570" class="quick-contact-btn phone">
                                <span></span> Call Now
                            </a>
                            <a href="mailto:info@happinesshorizontravel.com" class="quick-contact-btn email">
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
                        <a href="tour-detail.html.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>
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
        (function(){
            const accordion = document.getElementById('itinerary-accordion');
            if(!accordion) return;
            const buttons = accordion.querySelectorAll('.accordion-button');

            function closeAll(except){
                buttons.forEach(btn => {
                    if(btn !== except){
                        btn.setAttribute('aria-expanded','false');
                        const panel = document.getElementById(btn.getAttribute('aria-controls'));
                        if(panel){ panel.hidden = true; }
                    }
                });
            }

            buttons.forEach(btn => {
                const panel = document.getElementById(btn.getAttribute('aria-controls'));
                if(panel){ panel.hidden = true; }

                btn.addEventListener('click', function(){
                    const expanded = this.getAttribute('aria-expanded') === 'true';
                    if(expanded){
                        this.setAttribute('aria-expanded','false');
                        if(panel) panel.hidden = true;
                    } else {
                        closeAll(this);
                        this.setAttribute('aria-expanded','true');
                        if(panel) panel.hidden = false;
                        if(panel) panel.focus();
                    }
                });

                btn.addEventListener('keydown', function(e){
                    if(e.key === 'Enter' || e.key === ' '){
                        e.preventDefault(); this.click();
                    }
                });
            });
        })();
    </script>
</body>

</html>