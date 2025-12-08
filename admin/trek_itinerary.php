<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek Itinerary</title>
    <link rel="stylesheet" href="../Css/itinerary.css">
</head>

<body>
    <?php
    $trekId = isset($_GET['trek_id']) ? intval($_GET['trek_id']) : (isset($_POST['trek_id']) ? intval($_POST['trek_id']) : null);
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
            error_log('Could not load trek title for id ' . $trekId . ': ' . $e->getMessage());
        }
    }
    ?>

    <div class="upload-form">
        <h2>Upload Trek Itinerary for <?php echo htmlspecialchars($trekTitle); ?>
        </h2>
        <?php if (!$trekId): ?>
            <div style="color: red; padding: 10px; background: #ffcccc; border-radius: 5px; margin-bottom: 20px;">
                <strong>Error:</strong> No trek selected. Please access this page from the trek details page.
                <br>URL should include: <code>?trek_id=X</code>
            </div>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data" action="../controller/add_trek_itinerary.php">
            <input type="hidden" id="trek-id-reference" name="trek_id" value="<?php echo $trekId ? htmlspecialchars($trekId) : ''; ?>" />

            <div id="itinerary-sections-container">
                <?php
                $dayNumber = 1;
                $trekId = $trekId ?? null;
                include "../includes/templates/form/trek_itineray_form.html.php";
                ?>
            </div>

            <button type="button" id="add-itinerary-btn" class="btn">Add Itinerary Day</button>
            <button type="submit" class="btn">Upload Trek Data</button>
        </form>
    </div>

    <script>
        <?php include '../Js/add_Itinerary_form.js'; ?>
    </script>
</body>

</html>