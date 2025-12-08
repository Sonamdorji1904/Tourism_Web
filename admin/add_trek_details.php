<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Trek Detail Section</title>
    <link rel="stylesheet" href="../Css/tourcard.css">
</head>

<body>
    <div class="upload-form">
        <h2>Upload Trek Detail Section</h2>
        <div class="accordion" id="itinerary-accordion">
            <?php

            $trekId = isset($_GET['trek_id']) ? intval($_GET['trek_id']) : null;
            $trekTitle = '';
            if ($trekId) {
                require_once __DIR__ . '/../controller/connects/TrekCard.php';
                try {
                    $trekCardModel = new Treks();
                    $row = $trekCardModel->findTrekById($trekId);
                    if ($row) {
                        $trekTitle = $row['title'];
                    }
                } catch (Throwable $e) {
                    error_log('Could not load tour title for id ' . $trekId . ': ' . $e->getMessage());
                }
            }
            ?>

            <form method="POST" enctype="multipart/form-data" action="../controller/add_trek_details.php">
                <div class="form-group">
                    <label for="trek_title">Trek Title:</label>
                    <input id="trek_title" type="text" value="<?php echo htmlspecialchars($trekTitle); ?>" readonly />
                    <input id="trek_id" name="trek_id" type="hidden" value="<?php echo $trekId ? htmlspecialchars($trekId) : ''; ?>" />
                </div>

                <div class="form-group">
                    <label for="best_time">Best Time to Visit.:</label>
                    <input type="text" id="best_time" name="best_time" required
                        placeholder="e.g., Aprial to June and September to November">
                </div>

                <div class="form-group">
                    <label for="over_view">Trek Overview:</label>
                    <textarea id="over_view" name="over_view" required
                        placeholder="Please enter trek overview"></textarea>
                </div>

                <div class="form-group">
                    <label for="trek_highlights">Trek Highlights (Bullet Points):</label>
                    <textarea id="trek_highlights" name="trek_highlights" required
                        placeholder="Explore the scenic and culturally rich Paro Valley(/)
Enjoy a guided tour of Punakha, the ancient capitals"></textarea>
                    <small class="form-text">Enter each highlight point seprate by back slash (/). They will be displayed as bullet points</small>
                </div>
                <button type="submit" class="btn">Upload Section</button>
            </form>
        </div>
</body>

</html>