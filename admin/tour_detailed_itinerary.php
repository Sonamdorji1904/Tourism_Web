<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Itinerary</title>
    <link rel="stylesheet" href="../Css/itinerary.css">
</head>

<body>
    <?php
    $tourId = isset($_GET['tour_id']) ? intval($_GET['tour_id']) : (isset($_POST['tour_id']) ? intval($_POST['tour_id']) : null);
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

    <div class="upload-form">
        <h2>Upload Tour Itinerary for <?php echo htmlspecialchars($tourTitle); ?>
        </h2>
        <?php if (!$tourId): ?>
            <div style="color: red; padding: 10px; background: #ffcccc; border-radius: 5px; margin-bottom: 20px;">
                <strong>Error:</strong> No tour selected. Please access this page from the tour details page.
                <br>URL should include: <code>?tour_id=X</code>
            </div>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data" action="../controller/add_tour_itinerary.php">
            <input type="hidden" id="tour-id-reference" name="tour_id" value="<?php echo $tourId ? htmlspecialchars($tourId) : ''; ?>" />

            <div id="itinerary-sections-container">
                <?php
                $dayNumber = 1;
                $tourId = $tourId ?? null;
                include "../includes/templates/form/itinerary_form.html.php";
                ?>
            </div>

            <button type="button" id="add-itinerary-btn" class="btn">Add Itinerary Day</button>
            <button type="submit" class="btn">Upload Tour Data</button>
        </form>
    </div>

    <script>
        <?php include '../Js/add_Itinerary_form.js'; ?>
    </script>
</body>

</html>