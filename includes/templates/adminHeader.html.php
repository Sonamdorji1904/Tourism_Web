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
                
                <button class="mobile-menu-btn" onclick="toggleMenu()">☰</button>
                
                <ul class="nav-links">
                    <li><a href="index.html.php">Home</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="festivals.php">Festivals</a></li>
                    <li><a href="treks.php">Treks</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="request_quote.php">Request Quote</a></li>

                    <!-- Admin user dropdown -->
                    <li style="display:flex; align-items:center;">
                        <details class="user-dropdown" style="position:relative;">
                            <summary style="list-style:none; cursor:pointer; color:var(--neutral-100); font-weight:600; white-space:nowrap; display:inline-block; padding:-1px 8px;">Admin ▾</summary>
                            <ul class="dropdown-menu" style="position:absolute; right:0; top:calc(100% + 6px); background:var(--primary); border-radius:6px; padding:6px 0; margin:0; list-style:none; display:flex; flex-direction:column; gap:0; min-width:180px;">
                                <li style="margin:0;">
                                    <a href="updatePassword.php" style="color:#fff; text-decoration:none; display:block; padding:10px 16px;">Change Password</a>
                                </li>
                                <li style="margin:0;">
                                    <a href="../../controller/logout.php" style="color:#fff; text-decoration:none; display:block; padding:10px 16px;">Logout</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
HEADER_HTML;
