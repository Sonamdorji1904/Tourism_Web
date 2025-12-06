<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhutan Festivals - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="stylesheet" href="../../Css/festivals.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        .upcoming-floating {
            position: fixed;
            right: 3px;
            bottom: 30px;
            z-index: 9999;
            background: linear-gradient(135deg, #1a4d2e 0%, #3a8f5a 100%);
            color: #fff;
            padding: 10px 14px;
            border-radius: 999px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-weight: 600;
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
            transition: transform .14s ease, box-shadow .14s ease, opacity .14s ease;
            opacity: 0.98;
        }

        .upcoming-floating:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.22);
        }

        .upcoming-floating .uf-dot {
            width: 10px;
            height: 10px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 6px rgba(255, 255, 255, 0.04) inset;
        }

        .upcoming-floating .uf-label {
            font-size: 14px;
            line-height: 1;
            color: #fff;
        }

        .upcoming-festivals h2 {
            font-size: 2.5rem;
            color: var(--primary);
            text-align: center;
            margin-bottom: var(--spacing-lg);
            margin-top: 30px;
        }

        @media (max-width: 600px) {
            .upcoming-floating {
                right: 12px;
                bottom: 12px;
                padding: 8px 10px;
            }

            .upcoming-floating .uf-label {
                display: none;
            }
        }
    </style>
</head>

<body>
    <?php require_once '../../includes/templates/adminHeader.html.php';
    require_once __DIR__ . "/../../controller/festival_controller/get_festival.php";
    require_once __DIR__ . "/../../helper/StringHelper.php";
    $stringHelper = new StringHelper();
    ?>

    <!-- Page Hero -->
    <!-- Replace the hero image: edit the data-hero attribute on the section below (e.g. data-hero="public/your-image.jpg") -->
    <section class="page-hero festivals-hero" data-hero="../../public/bg2.jpg">
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
                    hero.style.backgroundImage = "linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('" + hero.dataset.hero + "')";
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
                <?php
                $categories = array_keys($groupedFestivals);

                foreach ($categories as $category):
                    $festivalsInCategory = $groupedFestivals[$category] ?? [];
                    $festivalPairs = array_chunk($festivalsInCategory, 2);
                    foreach ($festivalPairs as $pair): ?>
                        <div class="calendar-month">
                            <h3><?= $stringHelper->safeDisplay($category); ?></h3>
                            <div class="festival-row">
                                <?php foreach ($pair as $festival):
                                    $title = $festival['title'] ?? '';
                                    $venue = $festival['venue'] ?? ''; // make sure your template uses $venue
                                    include '../../includes/templates/festival/calenderCard.html.php';
                                endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>

            </div>
            <div class="tour-actions">
                <a href="../../admin/festival/add_festival.php" class="btn btn-primary">Add festival</a>
            </div>

            <!-- Floating upcoming festivals anchor (bottom-right) -->
            <a href="#upcoming-festivals" class="upcoming-floating" aria-label="Jump to Upcoming Festivals">
                <span class="uf-dot" aria-hidden="true"></span>
                <span class="uf-label">Upcoming Festivals</span>
            </a>

        </div>
    </section>

    <!-- Featured Festivals -->
    <section class="featured-festivals">
        <div class="container">
            <h2>Featured Festivals</h2>
            <div class="festivals-grid-detailed">
                <?php
                foreach ($allFestivals as $festival):
                    $title = $festival['title'] ?? '';
                    $category = $festival['category'] ?? '';
                    $venue = $festival['venue'] ?? '';
                    $description = $festival['description'] ?? '';
                    $imageFilePath = $festival['image'] ?? '';
                    $festivalId = $festival['id'] ?? '';
                    include '../../includes/templates/festival/festivalDetails.html.php';
                endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Upcoming Festivals -->
    <section class="upcoming-festivals" id="upcoming-festivals">
        <div class="container">
            <h2>Upcoming Festivals</h2>
            <div class="calendar-grid">
                <?php foreach ($upComingFestivals as $upComingFestival):
                    $category = $upComingFestival['category'] ?? '';
                ?>
                    <div class="upcoming-grid">
                        <div class="calendar-month">
                            <h3><?= $stringHelper->safeDisplay($category); ?></h3>
                            <div class="festival-row">
                                <?php
                                $title = $upComingFestival['title'] ?? '';
                                $venue = $upComingFestival['venue'] ?? '';
                                include '../../includes/templates/festival/calenderCard.html.php';
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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