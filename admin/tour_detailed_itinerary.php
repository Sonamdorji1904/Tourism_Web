<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Detailed Itinerary</title>
    <link rel="stylesheet" href="../Css/itinerary.css">
</head>

<body>
    <?php
    $tourId = isset($_GET['tour_id']) ? intval($_GET['tour_id']) : null;
    ?>

    <div class="upload-form">
        <h2>Upload Tour Detailed Itinerary</h2>
        <form method="POST" enctype="multipart/form-data" action="process_itinerary.php">
            <div id="itinerary-sections-container">
                <?php
                $dayNumber = 1;
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