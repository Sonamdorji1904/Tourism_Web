<?php
require_once __DIR__ . '/../../controller/connects/Itinerary.php';
require_once __DIR__ . '/../../includes/templates/adminHeader.html.php';

// Get itinerary ID from query
$itineraryId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($itineraryId <= 0) {
    die('Invalid itinerary ID');
}

$Itinerary = new Itinerary();
$itinerary = $Itinerary->findTourItineraryById($itineraryId);
if (!$itinerary) {
    die('itinerary not Itinerary found');
}

require_once __DIR__ . "/../../helper/StringHelper.php";
$stringHelper = new StringHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Itinerary</title>
    <link rel="stylesheet" href="../../Css/tourcard.css">
</head>

<body>
    <div class="upload-form">
        <h2>Update Itinerary</h2>
        <form action="../../controller/updateTourItinerary.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $itinerary['id']; ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $stringHelper->safeDIsplay($itinerary['title']); ?>" required>
            </div>

            <div class="form-group">
                <label for="day_number">Day Number:</label>
                <input type="text" id="day_number" name="day_number" value="<?php echo $stringHelper->safeDIsplay($itinerary['day_number']); ?>" required>
            </div>
            <div class="form-group">
                <label>Title for the day: <input type="text" name="title" value="<?php echo $stringHelper->safeDIsplay($itinerary['title']); ?>" required></label>
            </div>
            <div class="form-group">
                <label>Description:<br><textarea name="description" required><?php echo $stringHelper->safeDIsplay($itinerary['description']); ?></textarea></label>
            </div>

            <div class="form-group">
                <label>Activities: <textarea name="activities" required><?php echo $stringHelper->safeDIsplay($itinerary['activities']); ?></textarea></label>
            </div>

            <div class="form-group">
                <label>Meals: <input type="text" name="meals" value="<?php echo $stringHelper->safeDIsplay($itinerary['meals']); ?>"></label>
            </div>

            <div class="form-group">
                <label>Accomodation: <input type="text" name="accomodation" value="<?php echo $stringHelper->safeDIsplay($itinerary['accomodation']); ?>"></label>
            </div>
            <button type="submit">Update itinerary</button>
        </form>
    </div>
    <p><a href="view/itinerarys.php">Back to tours</a></p>
</body>

</html>