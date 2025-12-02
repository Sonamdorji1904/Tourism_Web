<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Festivals</title>
    <link rel="stylesheet" href="../../Css/tourcard.css"> 
</head>
    <body>
        <?php
        require_once "../../controller/festival_controller/festival.php";
        ?>
        <header>
            <h1>Upcoming and Past Festivals</h1>
        </header>

        <div class="festival-list-container **grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4 sm:p-6 bg-gray-50**">
            
        <?php if (empty($allFestivals)): ?>
            <p class="**col-span-full text-center text-xl text-gray-500 py-10**">No festival details are currently available.</p>
        <?php else: ?>
            
            <?php foreach ($allFestivals as $festival): ?>
                <script>console.log('Rendering festival: ' + <?php echo json_encode($festival); ?>);</script>
            
                <div class="festival-card **bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden flex flex-col**">
                    
                    <div class="festival-image **h-48 overflow-hidden**">
                        <img src="<?php echo htmlspecialchars($festival['image']); ?>" 
                            alt="<?php echo htmlspecialchars($festival['title']); ?>"
                            class="**w-full h-full object-cover**">
                    </div>

                    <div class="festival-details **p-5 flex flex-col flex-grow**">
                        
                        <h2 class="**text-2xl font-bold text-gray-800 mb-2 truncate**"><?php echo htmlspecialchars($festival['title']); ?></h2>
                        
                        <p class="meta **text-sm text-gray-600 mb-3 leading-relaxed**">
                            <strong>Date:</strong> <span class="**font-medium**"><?php echo htmlspecialchars($festival['date']); ?></span><br>
                            <strong>Venue:</strong> <span class="**font-medium**"><?php echo htmlspecialchars($festival['venue']); ?></span>
                        </p>

                        <p class="status **text-sm mb-4 font-semibold**">
                            Status: 
                            <span class="
                                <?php 
                                    $status = strtolower(htmlspecialchars($festival['status']));
                                    echo "inline-block px-3 py-1 rounded-full text-white ";
                                    if ($status === 'on sale') {
                                        echo "**bg-green-500**";
                                    } elseif ($status === 'sold out') {
                                        echo "**bg-red-500**";
                                    } elseif ($status === 'coming soon') {
                                        echo "**bg-yellow-500 text-yellow-900**";
                                    } else {
                                        echo "**bg-gray-500**";
                                    }
                                ?>
                            ">
                                <?php echo htmlspecialchars($festival['status']); ?>
                            </span>
                        </p>

                        <div class="description-preview **text-gray-700 text-sm mb-4 flex-grow**">
                            <?php 
                                // Displays a truncated description (max 150 characters)
                                $desc = htmlspecialchars($festival['description']);
                                echo substr($desc, 0, 150) . (strlen($desc) > 150 ? '...' : ''); 
                            ?>
                        </div>

                        <a href="festival_detail.php?id=<?php echo $festival['id']; ?>" 
                        class="read-more-btn **mt-auto inline-block text-center bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-300**">
                            View Details
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>
</body>
</html>