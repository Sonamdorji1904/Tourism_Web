<?php
require_once '../controller/connects/Treks.php';

$trekId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($trekId <= 0) {
    die('Invalid trek ID');
}

$trekCard = new Treks();
$trek = $trekCard->findTrekById($trekId);
if (!$trek) {
    die('Trek not found');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Trek</title>
    <link rel="stylesheet" href="../Css/tourcard.css">
</head>

<body>
    <?php
    require_once __DIR__ . "/../helper/StringHelper.php";
    $stringHelper = new StringHelper();
    ?>
    <div class="upload-form">
        <h2>Update Trek</h2>
        <form action="../controller/updateTrek.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $trek['id']; ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $stringHelper->safeDIsplay($trek['title']); ?>" required>
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle:</label>
                <input type="text" id="subtitle" name="subtitle" value="<?php echo $stringHelper->safeDIsplay($trek['sub_title']); ?>" required>
            </div>

            <div class="form-group">
                <label>Description:<br><textarea name="description" required><?php echo $stringHelper->safeDIsplay($trek['description']); ?></textarea></label>
            </div>
            <div class="form-group">
                <label>Duration: <input type="text" name="duration" value="<?php echo $stringHelper->safeDIsplay($trek['duration']); ?>" required></label>
            </div>
            <div class="form-group">
                <label>Image: <input type="file" name="image"></label>
                <?php if (!empty($trek['image_path'])): ?>
                    Current: <img src="../<?php echo $stringHelper->safeDIsplay($trek['image_path']); ?>" alt="Trek Image" style="max-width:120px;">
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Key Destinations: <input type="text" name="key_destinations" value="<?php echo $stringHelper->safeDIsplay($trek['key_destinations']); ?>"></label>
            </div>

            <div class="form-group">
                <label>Experience: <input type="text" name="experience" value="<?php echo $stringHelper->safeDIsplay($trek['experience']); ?>"></label>
            </div>
            <div class="form-group">
                <label>Theme: <input type="text" name="theme" value="<?php echo $stringHelper->safeDIsplay($trek['theme']); ?>"></label>
            </div>
            <div class="form-group">
                <label>Altitude: <input type="text" name="altitude" value="<?php echo $stringHelper->safeDIsplay($trek['altitude']); ?>"></label>
            </div>
            <button type="submit">Update Trek</button>
        </form>
    </div>
    <p><a href="view/treks.php">Back to Treks</a></p>
</body>

</html>