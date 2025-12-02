<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Festivals</title>
    <link rel="stylesheet" href="../../Css/tourcard.css"> 
</head>
<body>
    <header>
        <h1>Upcoming and Past Festivals</h1>
    </header>

    <div class="festival-list-container">
        
        <?php if (empty($allFestivals)): ?>
            <p>No festival details are currently available.</p>
        <?php else: ?>
            
            <?php foreach ($allFestivals as $festival): ?>
                <script>console.log('Rendering festival: ' + <?php echo json_encode($festival); ?>);</script>
            
                <div class="festival-card">
                    <div class="festival-image">
                        <img src="<?php echo htmlspecialchars($festival['image']); ?>" 
                             alt="<?php echo htmlspecialchars($festival['title']); ?>">
                    </div>

                    <div class="festival-details">
                        <h2><?php echo htmlspecialchars($festival['title']); ?></h2>
                        
                        <p class="meta">
                            <strong>Date:</strong> <?php echo htmlspecialchars($festival['date']); ?><br>
                            <strong>Venue:</strong> <?php echo htmlspecialchars($festival['venue']); ?>
                        </p>

                        <p class="status">
                            Status: <span class="<?php echo strtolower(htmlspecialchars($festival['status'])); ?>">
                            <?php echo htmlspecialchars($festival['status']); ?>
                            </span>
                        </p>

                        <div class="description-preview">
                            <?php 
                                // Displays a truncated description (max 150 characters)
                                $desc = htmlspecialchars($festival['description']);
                                echo substr($desc, 0, 150) . (strlen($desc) > 150 ? '...' : ''); 
                            ?>
                        </div>

                        <a href="festival_detail.php?id=<?php echo $festival['id']; ?>" class="read-more-btn">
                            View Details
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>
</body>
</html>