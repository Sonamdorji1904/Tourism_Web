          <?php
            require_once __DIR__ . '/../../helper/auth.php';
            requireAdmin();
            ?>
          <!DOCTYPE html>
          <html lang="en">

          <head>
              <meta charset="UTF-8">
              <title>Admin Dashboard - Happiness Horizon</title>
              <link ref="stylesheet" href="admin.css">
          </head>

          <body>

              <div class=" top-bar">
                  <div>
                      <h1>Admin Panel</h1>
                      <p>Welcome, <strong><?= htmlspecialchars($_SESSION['username'] ?? 'Admin') ?></strong></p>
                  </div>
                  <div>
                      <a href="change_password.php">Change Password</a> |
                      <a href="logout.php">Logout</a>
                  </div>
              </div>

              <div class="nav">
                  <!-- Add links to your existing admin pages here -->
                  <a href="dashboard.php">Dashboard</a>
                  <a href="tours.php">Manage Tours</a>
                  <a href="treks.php">Manage Treks</a>
                  <a href="itineraries.php">Manage Itineraries</a>
                  <!-- Add more as you build them -->
              </div>

              <hr>

              <div class="card">
                  <h2>Quick Actions</h2>
                  <ul>
                      <li><a href="tours.php">View / Edit Tours</a></li>
                      <li><a href="add_trek_cards.php">Add New Trek</a></li>
                      <li><a href="change_password.php">Change Your Password</a></li>
                  </ul>
              </div>

              <div class="card">
                  <h2>System Info</h2>
                  <p>User ID: <?= htmlspecialchars((string)($_SESSION['user_id'] ?? '')) ?></p>
                  <p>Role: <?= htmlspecialchars($_SESSION['role'] ?? '') ?></p>
              </div>

          </body>

          </html>