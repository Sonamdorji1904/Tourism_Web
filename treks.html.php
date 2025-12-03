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
                    <a href="index.html.php">Home</a> / <a href="treks.html.php">Treks</a> 
                </div>
                <h1>Treks and Adventures</h1>
                <p class="tour-subtitle">Chasing trails in the Land of Thunder Dragon</p>
                <div class="tour-quick-info">
                    <div class="quick-info-item">
                        Bumdra Trek
                    </div>
                    <div class="quick-info-item">
                        Dagala Trek
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
                        <h2>Bumdra Trek</h2>
                        <p class="lead">The Bumdra Trek is one of Bhutan’s most beautiful short-duration treks, with just one night of camping in the wilderness. Despite its brevity, 
                            it offers scenery and landscapes that rival longer Himalayan treks along with a deep sense of adventure as you climb through pristine forests and high ridges. 
                            Also known as “The Trek of the Thousand Dakinis,” this route allows you to explore sacred caves believed to be the gathering place of celestial beings. From 
                            the top, you’ll also enjoy a breathtaking view of the iconic Taktsang (Tiger’s Nest) Monastery a perspective not seen from the regular tourist trail.</p>
                        
                    </div>

                    <div class="tour-section">
                        <h2>Trek Summary</h2>
                        <ul class="highlights-list">
                            <li><strong>Duration:</strong> 1 night, 2 days</li>
                            <li><strong>Altitude:</strong> 2,300 m to 4,000 m</li>
                            <li><strong>Difficulty:</strong> Moderate</li>
                            <li><strong>Accomodation:</strong> Furnished camping tents</li>
                            <li><strong>Best time to visit:</strong> February, March, April, May, September, October, November & December</li>
                            <li><strong>Distance & Access:</strong> 20-minute drive from 0Paro to Sangchhoekor; 4-5 hours hike to camp (altitude approx. 3,500 m)</li>
                            <li><strong>Lunch:</strong> Chhoechungtse</li>
                            <li><strong>Day 2 Route:</strong> Hike via Toger's Nest (5-6 hours)</li>
                        </ul>
                    </div>

                    <div class="tour-section">
                        <h2>Detailed Itinerary</h2>

                        <div class="accordion" id="itinerary-accordion">

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day1-btn" aria-controls="day1-panel">
                                    <span class="day-number">Day 1</span>
                                    <span class="accordion-title">Sangchhoekor - Bumdra</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day1-panel" class="accordion-panel" role="region" aria-labelledby="day1-btn" hidden>
                                    <div class="day-content">
                                        <p>Begin your trek with a beautiful hike offering sweeping views of the Paro Valley, Himalayan ranges, and untouched natural landscapes. As you ascend, the scenery becomes increasingly dramatic until you reach the high-altitude campsite at Bumdra.</p>
                                        <p>Upon arrival, you may choose to rest and relax or visit the nearby monastery. The panoramic surroundings provide a once-in-a-lifetime experience unlike anywhere else in the world. In the evening, enjoy dinner at the campsite, often accompanied by a cozy bonfire under the stars.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item itinerary-day">
                                <button class="accordion-button" aria-expanded="false" id="day2-btn" aria-controls="day2-panel">
                                    <span class="day-number">Day 2</span>
                                    <span class="accordion-title">Bumdra - Taktshang Monastery - Road Point</span>
                                    <span class="chev" aria-hidden="true">▾</span>
                                </button>
                                <div id="day2-panel" class="accordion-panel" role="region" aria-labelledby="day2-btn" hidden>
                                    <div class="day-content">
                                        <p><strong>Duration:</strong> 5 - 6 hours</p>
                                        <p>Wake early to witness a stunning sunrise over the mountains from your campsite. After breakfast, continue your hike through beautiful forests of rhododendron and pine as you descend toward the sacred Taktsang Monastery.</p>
                                        <p>While most visitors explore only the main temples at Tiger’s Nest, you will have the unique opportunity to visit Zangdopelri, the temple situated above Taktsang. Zangdopelri represents the mystical copper-colored mountain of Guru Rinpoche and offers a deeper spiritual experience.</p>
                                        <p>After exploring the temples, descend to the base where your vehicle will be waiting to take you back to your hotel.</p>
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