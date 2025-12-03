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
    <link rel="stylesheet" href="../Css/styles.css">
</head>

<body>
    <h2>Update Tour</h2>
    <form action="../controller/update_tour.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $tour['id']; ?>">
        <label>Title: <input type="text" name="title" value="<?php echo htmlspecialchars($tour['title']); ?>" required></label><br>
        <label>Description:<br><textarea name="description" required><?php echo htmlspecialchars($tour['description']); ?></textarea></label><br>
        <label>Duration: <input type="text" name="duration" value="<?php echo htmlspecialchars($tour['duration']); ?>" required></label><br>
        <label>Image: <input type="file" name="image"></label>
        <?php if (!empty($tour['image_path'])): ?>
            <br>Current: <img src="../<?php echo htmlspecialchars($tour['image_path']); ?>" alt="Tour Image" style="max-width:120px;">
        <?php endif; ?><br>
        <label>Key Destinations: <input type="text" name="key_destinations" value="<?php echo htmlspecialchars($tour['key_destinations']); ?>"></label><br>
        <label>Experience: <input type="text" name="experience" value="<?php echo htmlspecialchars($tour['experience']); ?>"></label><br>
        <label>Theme: <input type="text" name="theme" value="<?php echo htmlspecialchars($tour['theme']); ?>"></label><br>
        <label>Transportation: <input type="text" name="transportation" value="<?php echo htmlspecialchars($tour['transportation']); ?>"></label><br>
        <button type="submit">Update Tour</button>
    </form>
    <p><a href="view/tours.php">Back to Tours</a></p>
</body>

</html>