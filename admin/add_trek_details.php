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
                require_once __DIR__ . '/../controller/connects/Treks.php';
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
                    <label for="over_view">Trek summery:</label>
                    <textarea id="over_view" name="over_view" required
                        placeholder="Please enter trek overview"></textarea>
                </div>
                <button type="submit" class="btn">Upload Section</button>
            </form>
        </div>
</body>

</html>