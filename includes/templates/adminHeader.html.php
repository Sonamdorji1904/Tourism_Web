<?php
echo <<<HEADER_HTML
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <a href="index.html.php">
                        <img src="../../public/HH.png" alt="Happiness Horizon Travel" 
                             class="logo-img" style="max-height:50px; width:auto; display:block;">
                    </a>
                </div>
                
                <!-- BUTTON MUST COME BEFORE NAV-LINKS -->
                <button class="mobile-menu-btn" onclick="toggleMenu()">☰</button>
                
                <ul class="nav-links">
                    <li><a href="index.html.php">Home</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="festivals.php">Festivals</a></li>
                    <li><a href="treks.php">Treks</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="request_quote.php">Request Quote</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
HEADER_HTML;
