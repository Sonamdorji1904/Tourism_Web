<?php
echo <<<HEADER_HTML
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <h2>Happiness Horizon Travel</h2>
                </div>
                <ul class="nav-links">
                    <li><a href="index.html.php">Home</a></li>
                    <li><a href="tours.html.php">Tours</a></li>
                    <li><a href="festivals.html.php">Festivals</a></li>
                    <li><a href="treks.html.php">Treks</a></li>
                    <li><a href="contact.html.php">Contact</a></li>
                    <li><a href="about.html.php">About Us</a></li>
                </ul>
                <button class="mobile-menu-btn" onclick="toggleMenu()">☰</button>
            </div>
        </div>
    </nav>
    HEADER_HTML;
