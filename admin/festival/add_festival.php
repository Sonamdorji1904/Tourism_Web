<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Festival Details</title>
    <link rel="stylesheet" href="../../Css/tourcard.css">
</head>

<body>
    <div class="upload-form">
        <h2>Upload Festival Details</h2>

        <form method="POST" enctype="multipart/form-data" action="../../controller/festival_controller/add_festival.php">
            <div class="form-group">
                <label for="title">Festival Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="category">Festival Category:</label>
                <input type="text" id="category" name="category" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="festival_image">Image:</label>
                <input type="file" id="festival_image" name="festival_image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" id="date" name="date">
            </div>

            <div class="form-group">
                <label>Venue</label>
                <input type="text" id="venue" name="venue" placeholder="e.g., Spiritual experiences, Cultural landmarks">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" style="width:100%" required>
                    <option value="">Select</option>
                    <option value="featured">featured festival</option>
                    <option value="non-featured">nonfeatured festival</option>
                </select>
            </div>

            <button type="submit" class="btn">Upload Festival Details</button>
        </form>
    </div>
</body>

</html>