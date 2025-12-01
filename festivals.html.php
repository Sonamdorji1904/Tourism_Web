<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhutan Festivals - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="Css/festivals.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Tailwind Play CDN removed to preserve site-wide header styles -->
    <style>
        
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'includes/templates/header.html.php'; ?>

    <!-- Page Hero -->
    <!-- Replace the hero image: edit the data-hero attribute on the section below (e.g. data-hero="public/your-image.jpg") -->
    <section class="page-hero festivals-hero" data-hero="public/mountain.jpg">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html.php">Home</a> / Festivals
                </div>
                <h1>Bhutan Festivals & Events</h1>
                <p class="hero-subtitle">Experience the vibrant colors, sacred dances, and spiritual celebrations that bring Bhutan's culture to life</p>
            </div>
        </div>
    </section>

    <!-- small helper script: apply hero image from data-hero attribute so you can change it directly in HTML -->
    <script>
        (function() {
            try {
                var hero = document.querySelector('.page-hero');
                if (hero && hero.dataset && hero.dataset.hero) {
                    hero.style.backgroundImage = "linear-gradient(to bottom, rgba(26,77,46,0.45), rgba(26,77,46,0.45)), url('" + hero.dataset.hero + "')";
                    hero.style.backgroundSize = 'cover';
                    hero.style.backgroundPosition = 'center';
                }
            } catch (e) {
                // fail silently
                console.error(e);
            }
        })();
    </script>

    <!-- Festivals Introduction -->
    <section class="festivals-intro">
        <div class="container">
            <div class="intro-content">
                <h2>Celebrate Life in the Land of Happiness</h2>
                <p class="lead">Bhutanese festivals, known as Tshechus, are vibrant celebrations of faith, culture, and community. These sacred events feature colorful mask dances, traditional music, and spiritual rituals that have been passed down through generations. Attending a festival offers travelers a rare glimpse into Bhutan's living heritage and the deep devotion of its people.</p>
                <p>From the grand Paro and Thimphu Tshechus to the unique highland celebrations and nature festivals, each event tells a story of Bhutan's rich spiritual traditions and harmonious relationship with nature.</p>
            </div>
        </div>
    </section>

    <!-- Festival Calendar -->
    <section class="festival-calendar">
        <div class="container">
            <h2>Festival Calendar</h2>
            <p class="section-intro">Plan your visit around these spectacular celebrations</p>
            <div class="calendar-grid">
                <div class="calendar-month">
                    <h3>February - March</h3>
                    <div class="month-festivals">
                        <a href="festival-punakha-domchoe.html" class="calendar-item">
                            <strong>Punakha Domchoe</strong>
                            <span>Punakha Dzong</span>
                        </a>
                    </div>
                </div>
                <div class="calendar-month">
                    <h3>Spring</h3>
                    <div class="month-festivals">
                        <a href="festival-paro-tshechu.html" class="calendar-item">
                            <strong>Paro Tshechu</strong>
                            <span>Paro Valley</span>
                        </a>
                        <a href="festival-rhododendron.html" class="calendar-item">
                            <strong>Rhododendron Festival</strong>
                            <span>Merak & Sakteng</span>
                        </a>
                    </div>
                </div>
                <div class="calendar-month">
                    <h3>September - October</h3>
                    <div class="month-festivals">
                        <a href="festival-thimphu-tshechu.html" class="calendar-item">
                            <strong>Thimphu Tshechu</strong>
                            <span>Tashichho Dzong</span>
                        </a>
                        <a href="festival-jomolhari.html" class="calendar-item">
                            <strong>Jomolhari Mountain Festival</strong>
                            <span>Soe Gewog, Thimphu</span>
                        </a>
                    </div>
                </div>
                <div class="calendar-month">
                    <h3>October - November</h3>
                    <div class="month-festivals">
                        <a href="festival-jamlhakhang-drup.html" class="calendar-item">
                            <strong>Jamlhakhang Drup</strong>
                            <span>Bumthang</span>
                        </a>
                        <a href="festival-black-necked-crane.html" class="calendar-item">
                            <strong>Black-Necked Crane Festival</strong>
                            <span>Phobjikha Valley</span>
                        </a>
                    </div>
                </div>
                <div class="calendar-month">
                    <h3>Seasonal</h3>
                    <div class="month-festivals">
                        <a href="festival-royal-highland.html" class="calendar-item">
                            <strong>Royal Highland Festival</strong>
                            <span>Laya, Gasa</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Festivals -->
    <section class="featured-festivals">
        <div class="container">
            <h2>Featured Festivals</h2>
            <div class="festivals-grid-detailed">
                <!-- Paro Tshechu -->
                <div class="festival-card-detailed">
                    <div class="festival-image">
                        <img src="public/paro-tshechu-mask-dance-festival.jpg" alt="Paro Tshechu">
                        <div class="festival-badge">Most Popular</div>
                    </div>
                    <div class="festival-content">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3">Paro Tshechu</h3>
                        <div class="festival-meta mb-3">
                            <span class="festival-location text-xs md:text-sm text-gray-700">📍 Paro Valley</span>
                        </div>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">The Paro Tshechu is one of Bhutan’s most celebrated and widely attended festivals, held every spring in the picturesque Paro Valley. This sacred event honors the deeds of Guru Padmasambhava (Guru Rinpoche), the revered 8th-century saint who introduced Buddhism to Bhutan.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">For several days, the courtyard of Rinpung Dzong bursts to life with vibrant mask dances (cham) performed by monks and laymen in elaborate costumes, accompanied by traditional music, storytelling, and sacred rituals. The festival draws thousands of Bhutanese dressed in their finest attire, coming together to receive blessings and celebrate their rich cultural heritage.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">The festival’s highlight is the early-morning unfurling of the giant Thongdrel — a sacred religious scroll on the final day. Believed to cleanse sins and bestow blessings, this awe-inspiring appliqué thangka is a deeply moving sight for all present.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal">For visitors, the Paro Tshechu offers an immersive glimpse into Bhutan’s spiritual life, vibrant traditions, and festive community spirit — all set against the stunning backdrop of Bhutan’s iconic landscapes.</p>
                    </div>
                </div>

                <!-- Thimphu Tshechu -->
                <div class="festival-card-detailed">
                    <div class="festival-image">
                        <img src="public/thimphu.jpg" alt="Thimphu Tshechu">
                        <div class="festival-badge">Grand Festival</div>
                    </div>
                    <div class="festival-content">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3">Thimphu Tshechu</h3>
                        <div class="festival-meta mb-3">
                            <span class="festival-location text-xs md:text-sm text-gray-700">📍 Tashichho Dzong</span>
                        </div>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">The Thimphu Tshechu is one of Bhutan’s largest and most vibrant religious festivals, held annually in the capital city of Thimphu, usually during September or October. Rooted in centuries-old traditions, the festival honors the teachings of Guru Padmasambhava and serves as a spiritual and cultural highlight for both locals and visitors.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">Hosted at the magnificent Tashichho Dzong, the Tshechu features three days of colorful mask dances (cham) performed by monks and laymen in elaborate costumes, along with folk songs, traditional music, and sacred rituals. Each performance carries deep religious symbolism and blessings for those who witness them.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">For Bhutanese, attending the Tshechu is a sacred act of merit; for travelers, it’s an unforgettable glimpse into Bhutan’s living heritage, vibrant spirituality, and national identity.</p>
                    </div>
                </div>

                <!-- Black-Necked Crane Festival -->
                <div class="festival-card-detailed">
                    <div class="festival-image">
                        <img src="public/black-necked-crane.jpg" alt="Black-Necked Crane Festival">
                        <div class="festival-badge">Nature Festival</div>
                    </div>
                    <div class="festival-content">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3">Black-Necked Crane Festival</h3>
                        <div class="festival-meta mb-3">
                            <span class="festival-location text-xs md:text-sm text-gray-700">📍 Phobjikha Valley</span>
                        </div>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">The Black-necked Crane Festival is an annual bird-watching and cultural event held in the scenic Phobjikha Valley, Bhutan’s most important winter habitat for the endangered Black-necked Cranes. Organized to raise awareness on crane conservation and promote sustainable livelihoods, the festival strengthens the bond between nature and the local community.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">Held every November, the festival features vibrant folk songs, traditional mask dances, crane-themed performances, and environmental-themed dramas by local school children.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">Set at 3,000 meters above sea level, Phobjikha Valley is a pristine alpine wetland and home to over 300 Black-necked Cranes each winter. Surrounded by forests and subsistence farms, and overlooked by the revered Gangtey Monastery, the valley offers both natural beauty and spiritual significance, making it a key destination for nature lovers, birdwatchers, and cultural travelers alike.</p>
                    </div>
                </div>

                <!-- Punakha Domchoe -->
                <div class="festival-card-detailed">
                    <div class="festival-image">
                        <img src="public/image 10.png" alt="Punakha Domchoe">
                        <div class="festival-badge">Historic</div>
                    </div>
                    <div class="festival-content">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3">Punakha Domchoe</h3>
                        <div class="festival-meta mb-3">
                            <span class="festival-location text-xs md:text-sm text-gray-700">📍 Punakha Dzong</span>
                        </div>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">Punakha Domchoe is one of Bhutan’s most captivating and culturally significant festivals, celebrated in the month of February or March. This spectacular event begins with fifteen days of sacred prayers and mesmerizing mask dances held inside the grand congregation hall (Dukhang) of the stunning Punakha Dzong, a historic fortress built by the revered Zhabdrung Ngawang Namgyal. Known locally as Goenwang Drubchen, the festival culminates in three thrilling days of martial performances by the traditional militia, called Pazaps.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">These colorful and dynamic reenactments commemorate a historic military victory in 1649, bringing Bhutan’s rich history vividly to life. The highlight of the festival is the symbolic ritual of casting a jewel into the Mochu River, a powerful tradition that honors the past and symbolizes good fortune.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">Punakha Domchoe offers an unforgettable opportunity to witness Bhutan’s living heritage in full bloom. Beyond the reenactment of battle, the festival’s songs and dances celebrate the founding of the Bhutanese state by Zhabdrung Rinpoche, making it a deeply meaningful cultural experience for all who attend.</p>
                    </div>
                </div>

                <!-- Jomolhari Mountain Festival -->
                <div class="festival-card-detailed">
                    <div class="festival-image">
                        <img src="public/jomolhari.jpg" alt="Jomolhari Mountain Festival">
                        <div class="festival-badge">Highland</div>
                    </div>
                    <div class="festival-content">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3">Jomolhari Mountain Festival</h3>
                        <div class="festival-meta mb-3">
                            <span class="festival-location text-xs md:text-sm text-gray-700">📍 Soe Gewog, Thimphu</span>
                        </div>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">Join us in the month of October for the Jomolhari Mountain Festival for an unforgettable journey through the pristine highlands of Soe Gewog, Thimphu Dzongkhag. Set against the breathtaking backdrop of Bhutan’s sacred peaks, this festival celebrates the coexistence of people, nature, and wildlife especially the elusive snow leopard, known locally as the ghost of the mountains.</p>
                        <div class="festival-highlights">
                            <h4>Highlights:</h4>
                            <ul>
                                <li>Witness Bhutanese cultural performances, mask dances, and folk songs.</li>
                                <li>Enjoy vibrant local fairs showcasing highland crafts, yak products, and authentic cuisine.</li>
                                <li>Capture panoramic views of Mount Jomolhari (7,326 m) one of Bhutan’s most majestic peaks.</li>
                                <li>Engage with highland communities, learning about their sustainable lifestyles and traditions.</li>
                                <li>Celebrate Bhutan’s deep connection between people, wildlife, and sacred landscapes.</li>
                                <li>Support community-based eco-tourism and snow leopard conservation efforts.</li>
                                <li>Immerse yourself in the spirit of the Himalayas, where nature and culture flourish together.</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Royal Highland Festival -->
                <div class="festival-card-detailed">
                    <div class="festival-image">
                        <img src="public/laya.jpg" alt="Royal Highland Festival">
                        <div class="festival-badge">Cultural</div>
                    </div>
                    <div class="festival-content">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3">Royal Highland Festival</h3>
                        <div class="festival-meta mb-3">
                            <span class="festival-location text-xs md:text-sm text-gray-700">📍 Laya, Gasa</span>
                        </div>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">The Royal Highland Festival is a vibrant celebration of the unique cultural heritage and enduring legacy of Bhutan’s highland communities. Set amidst the breathtaking Himalayan peaks in the pristine and remote village of Laya under Gasa Dzongkhag, the festival offers visitors a rare opportunity to experience the authentic highland way of life. This extraordinary event showcases the resilience, traditions, and beauty of highland culture, while also featuring the rich customs, crafts, and products from other highland regions including Wangduephodrang, Thimphu, Paro, Haa, Trongsa, Bumthang, Trashigang, Lhuentse, and Trashiyangtse.</p>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">Whether you're drawn by the stunning landscapes, the warm hospitality of the Layap people, or the deep cultural immersion, the Royal Highland Festival is a once-in-a-lifetime journey into the heart of Bhutan’s highlands.</p>
                    </div>
                </div>

                <!-- Rhododendron Festival -->
                <div class="festival-card-detailed">
                    <div class="festival-image">
                        <img src="public/rhododendron-festival-merak-sakteng.jpg" alt="Rhododendron Festival">
                        <div class="festival-badge">Nature & Culture</div>
                    </div>
                    <div class="festival-content">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-3">Rhododendron Festival</h3>
                        <div class="festival-meta mb-3">
                            <span class="festival-location text-xs md:text-sm text-gray-700">📍 Merak & Sakteng</span>
                        </div>
                        <p class="text-sm md:text-base lg:text-lg leading-normal mb-3">The first-ever Rhododendron Week 2025 in the enchanting alpine landscapes of Merak and Sakteng was envisioned as a vibrant celebration of nature and culture. This unique festival showcases the breathtaking rhododendron bloom while highlighting the rich traditions of the Brokpa community, renowned for their deep-rooted heritage and distinctive way of life.</p>
                        <div class="festival-highlights">
                            <h4>Highlights:</h4>
                            <ul>
                                <li>Celebrate and Experience the spectacular seasonal bloom of rhododendrons alongside the colorful cultural expressions of the Brokpa people.</li>
                                <li>Promote Eco-Tourism: Discover the pristine highland gewogs of Trashigang Dzongkhag, where ecological beauty meets authentic local hospitality.</li>
                                <li>Foster pride in Brokpa language, traditions, and craftsmanship bringing communities and visitors together in cultural harmony.</li>
                                <li>Support Local Livelihoods: Create sustainable economic opportunities through community-based tourism initiatives and local enterprises.</li>
                                <li>Educate & Inspire: Raise awareness on biodiversity conservation, climate resilience, and responsible tourism practices.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Festival Tours CTA -->
    <section class="festival-tours-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Experience Festivals with Our Special Tours</h2>
                <p>Join us for specially curated tours timed with Bhutan's most spectacular festivals. Witness sacred dances, receive blessings, and immerse yourself in centuries-old traditions.</p>
                <div class="cta-buttons">
                    <a href="tours.html.php" class="btn btn-primary">View Festival Tours</a>
                    <a href="contact.html.php" class="btn btn-secondary">Plan Your Visit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Festival Tips -->
    <section class="festival-tips">
        <div class="container">
            <h2>Festival Travel Tips</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <div class="tip-icon">📅</div>
                    <h3>Book Early</h3>
                    <p>Festival dates are popular travel times. Book your tour 3-6 months in advance to secure accommodations and the best viewing spots.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">👔</div>
                    <h3>Dress Respectfully</h3>
                    <p>Festivals are sacred events. Dress modestly and consider wearing traditional Bhutanese attire (available for rent) to show respect.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">📸</div>
                    <h3>Photography Etiquette</h3>
                    <p>Ask permission before photographing people. Some sacred dances and areas may have photography restrictions.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">⏰</div>
                    <h3>Arrive Early</h3>
                    <p>Get to the festival grounds early for the best viewing positions. Performances often start in the morning and continue throughout the day.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">🎒</div>
                    <h3>What to Bring</h3>
                    <p>Bring sunscreen, a hat, water, snacks, and comfortable shoes. Festivals are outdoor events that can last several hours.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">🙏</div>
                    <h3>Respect Traditions</h3>
                    <p>Observe quietly during sacred moments, don't walk in front of dancers, and follow your guide's instructions for proper etiquette.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta">
        <div class="container">
            <div class="cta-box">
                <h2>Ready to Experience Bhutan's Festivals?</h2>
                <p>Let us help you plan your journey around these spectacular celebrations</p>
                <a href="contact.html.php" class="btn btn-primary">Contact Us Today</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'includes/templates/footer.html.php'; ?>


    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    document.querySelector('.nav-links').classList.remove('active');
                }
            });
        });

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>