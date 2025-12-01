<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Tour Package</title>
    <link rel="stylesheet" href="../Css/tourcard.css">
</head>

<body>
    <div class="upload-form">
        <h2>Upload New Tour Package</h2>

        <form method="POST" enctype="multipart/form-data" action="../controller/add_tour_cards.php">
            <div class="form-group">
                <label for="title">Tour Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" id="duration" name="duration" placeholder="e.g., 5 Days" required>
            </div>

            <div class="form-group">
                <label for="tour_image">Tour Image:</label>
                <input type="file" id="tour_image" name="tour_image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label>Key Destinations / Cities (add multiple separated by commas):</label>
                <input type="text" id="destinations" name="destinations" placeholder="e.g., Thimphu, paro, punakha">
            </div>
            <div class="form-group">
                <label>Signature Activity / Experience </label>
                <input type="text" id="exprience" name="exprience" placeholder="e.g., Tiger's Nest hike, Phobjika valley trek">
            </div>
            <div class="form-group">
                <label>Inclusions / Theme </label>
                <input type="text" id="theme" name="theme" placeholder="e.g., Spiritual experiences, Cultural landmarks">
            </div>

            <button type="submit" class="btn">Upload Tour Package</button>
        </form>
    </div>
</body>

</html>