// Toggle mobile menu
function toggleMenu() {
  const navLinks = document.querySelector(".nav-links");
  if (navLinks) {
    navLinks.classList.toggle("active");
  }
}

// Close menu when clicking outside
document.addEventListener("click", function(event) {
  const navLinks = document.querySelector(".nav-links");
  const menuBtn = document.querySelector(".mobile-menu-btn");

  // If menu is open and click is outside both menu and button
  if (navLinks && navLinks.classList.contains("active")) {
    if (!navLinks.contains(event.target) && !menuBtn.contains(event.target)) {
      navLinks.classList.remove("active");
    }
  }
});

// Close menu when clicking any nav link
document.addEventListener("click", function(event) {
  if (event.target.closest(".nav-links a")) {
    const navLinks = document.querySelector(".nav-links");
    if (navLinks) {
      navLinks.classList.remove("active");
    }
  }
});

// Close menu on escape key
document.addEventListener("keydown", function(event) {
  if (event.key === "Escape") {
    const navLinks = document.querySelector(".nav-links");
    if (navLinks && navLinks.classList.contains("active")) {
      navLinks.classList.remove("active");
    }
  }
});

// Close menu when resizing to desktop
window.addEventListener("resize", function() {
  if (window.innerWidth > 768) {
    const navLinks = document.querySelector(".nav-links");
    if (navLinks) {
      navLinks.classList.remove("active");
    }
  }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    }
  });
});

// Navbar scroll effect
window.addEventListener("scroll", function() {
  const navbar = document.querySelector(".navbar");
  if (navbar) {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  }
});

// Hero image handler
(function() {
  try {
    const hero = document.querySelector(".tour-detail-hero");
    if (hero && hero.dataset && hero.dataset.hero) {
      hero.style.backgroundImage = "url('" + hero.dataset.hero + "')";
      hero.style.backgroundSize = "cover";
      hero.style.backgroundPosition = "center";

      const overlay = hero.querySelector(".hero-overlay");
      if (overlay) {
        overlay.style.background =
          "linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4))";
        overlay.style.opacity = "1";
      }
    }
  } catch (e) {
    console.error("Hero image error:", e);
  }
})();

function confirmLogout(event) {
  if (!confirm("Are you sure you want to logout?")) {
    event.preventDefault(); // Prevent navigation
    return false;
  }
  return true;
}
