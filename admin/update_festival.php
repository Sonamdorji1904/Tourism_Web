<?php
require_once '../controller/connects/Festival.php';

$festivalId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($festivalId <= 0) {
    die('Invalid festival ID');
}

$festival = new Festival();
$festival = $festival->findFestivalById($festivalId);
if (!$festival) {
    die('Festival not found');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Festival</title>
    <link rel="stylesheet" href="../Css/tourcard.css">
</head>

<body>
    <?php
    require_once __DIR__ . "/../helper/StringHelper.php";
    $stringHelper = new StringHelper();
    ?>
    <div class="upload-form">
        <h2>Update Festival</h2>
        <form action="../controller/update_festival.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $festival['id']; ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $stringHelper->safeDIsplay($festival['title']); ?>" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" value="<?php echo $stringHelper->safeDIsplay($festival['category']); ?>" required>
            </div>

            <div class="form-group">
                <label>Description:<br><textarea name="description" required><?php echo $stringHelper->safeDIsplay($festival['description']); ?></textarea></label>
            </div>
            <div class="form-group">
                <label>Venue: <input type="text" name="venue" value="<?php echo $stringHelper->safeDIsplay($festival['venue']); ?>" required></label>
            </div>
            <div class="form-group">
                <label>Image: <input type="file" name="image"></label>
                <?php if (!empty($festival['image'])): ?>
                    Current: <img src="../<?php echo $stringHelper->safeDIsplay($festival['image']); ?>" alt="Festival Image" style="max-width:120px;">
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Date: <input type="text" name="date" value="<?php echo $stringHelper->safeDIsplay($festival['date']); ?>"></label>
            </div>

            <div class="form-group">
                <label>Status: <input type="text" name="status" value="<?php echo $stringHelper->safeDIsplay($festival['status']); ?>"></label>
            </div>
            <button type="submit">Update Festival</button>
        </form>
    </div>
    <p><a href="view/festivals.php">Back to Festivals</a></p>
</body>

</html>