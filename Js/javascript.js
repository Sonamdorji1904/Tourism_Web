function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.querySelector('.nav-links').classList.remove('active');
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Small helper script: apply hero image from data-hero attribute so you can change it directly in HTML
        (function() {
                try {
                    var hero = document.querySelector('.tour-detail-hero');
                    if (hero && hero.dataset && hero.dataset.hero) {
                        hero.style.backgroundImage = "url('" + hero.dataset.hero + "')";
                        hero.style.backgroundSize = 'cover';
                        hero.style.backgroundPosition = 'center';

                        // Add a dark gradient overlay for text visibility
                        var overlay = hero.querySelector('.hero-overlay');
                        if (overlay) {
                            overlay.style.background = 'linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4))';
                            overlay.style.opacity = '1';
                        }
                    }
                } catch (e) {
                    console.error(e);
                }
        })();


        