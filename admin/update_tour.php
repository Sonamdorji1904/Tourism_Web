<?php
require_once '../controller/connects/TourCard.php';

// Get tour ID from query
$tourId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($tourId <= 0) {
    die('Invalid tour ID');
}

$tourCard = new TourCard();
$tour = $tourCard->findTourById($tourId);
if (!$tour) {
    die('Tour not found');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Tour</title>
    <link rel="stylesheet" href="../Css/tourcard.css">
</head>

<body>
    <?php
    require_once __DIR__ . "/../helper/StringHelper.php";
    $stringHelper = new StringHelper();
    ?>
    <div class="upload-form">
        <h2>Update Tour</h2>
        <form action="../controller/updateTour.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $tour['id']; ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $stringHelper->safeDIsplay($tour['title']); ?>" required>
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle:</label>
                <input type="text" id="subtitle" name="subtitle" value="<?php echo $stringHelper->safeDIsplay($tour['sub_title']); ?>" required>
            </div>

            <div class="form-group">
                <label>Description:<br><textarea name="description" required><?php echo $stringHelper->safeDIsplay($tour['description']); ?></textarea></label>
            </div>
            <div class="form-group">
                <label>Duration: <input type="text" name="duration" value="<?php echo $stringHelper->safeDIsplay($tour['duration']); ?>" required></label>
            </div>
            <div class="form-group">
                <label>Image: <input type="file" name="image"></label>
                <?php if (!empty($tour['image_path'])): ?>
                    Current: <img src="../<?php echo $stringHelper->safeDIsplay($tour['image_path']); ?>" alt="Tour Image" style="max-width:120px;">
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Key Destinations: <input type="text" name="key_destinations" value="<?php echo $stringHelper->safeDIsplay($tour['key_destinations']); ?>"></label>
            </div>

            <div class="form-group">
                <label>Experience: <input type="text" name="experience" value="<?php echo $stringHelper->safeDIsplay($tour['experience']); ?>"></label>
            </div>
            <div class="form-group">
                <label>Theme: <input type="text" name="theme" value="<?php echo $stringHelper->safeDIsplay($tour['theme']); ?>"></label>
            </div>
            <div class="form-group">
                <label>Transportation: <input type="text" name="transportation" value="<?php echo $stringHelper->safeDIsplay($tour['transportation']); ?>"></label>
            </div>
            <button type="submit">Update Tour</button>
        </form>
    </div>
    <p><a href="view/tours.php">Back to Tours</a></p>
</body>

</html>