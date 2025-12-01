<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Tour Detail Section</title>
    <link rel="stylesheet" href="../Css/tourcard.css">
</head>

<body>
    <div class="upload-form">
        <h2>Upload Tour Detail Section</h2>

        <?php

        $tourId = isset($_GET['tour_id']) ? intval($_GET['tour_id']) : null;
        $tourTitle = '';
        if ($tourId) {
            require_once __DIR__ . '/../controller/connects/TourCard.php';
            try {
                $tourCardModel = new TourCard();
                $row = $tourCardModel->findTourById($tourId);
                if ($row) {
                    $tourTitle = $row['title'];
                }
            } catch (Throwable $e) {
                error_log('Could not load tour title for id ' . $tourId . ': ' . $e->getMessage());
            }
        }
        ?>

        <form method="POST" enctype="multipart/form-data" action="../controller/add_tour_details.php">
            <div class="form-group">
                <label for="tour_title">Tour Title:</label>
                <input id="tour_title" type="text" value="<?php echo htmlspecialchars($tourTitle); ?>" readonly />
                <input id="tour_id" name="tour_id" type="hidden" value="<?php echo $tourId ? htmlspecialchars($tourId) : ''; ?>" />
            </div>

            <div class="form-group">
                <label for="sub_title">Section Title:</label>
                <input type="text" id="sub_title" name="sub_title" required
                    placeholder="e.g., Perfect introduction to the Land of Happiness">
            </div>

            <div class="form-group">
                <label for="best_time">Best Time to Visit.:</label>
                <input type="text" id="best_time" name="best_time" required
                    placeholder="e.g., Aprial to June and September to November">
            </div>

            <div class="form-group">
                <label for="over_view">Tour Overview:</label>
                <textarea id="over_view" name="over_view" required
                    placeholder="Please enter tour overview"></textarea>
            </div>
            <div class="form-group">
                <label for="tour_highlights">Tour Highlights (Bullet Points):</label>
                <textarea id="tour_highlights" name="tour_highlights" required
                    placeholder="Enter each highlight point seprate by baskward slash (/). They will be displayed as bullet points"></textarea>
            </div>

            <button type="submit" class="btn">Upload Section</button>
        </form>
    </div>
</body>

</html>