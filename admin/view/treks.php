<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Treks - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php require_once __DIR__ . '/../../includes/templates/adminHeader.html.php'; ?>

    <?php require '../../controller/fetch_treks.php'; ?>

    <!-- Treks Grid -->
    <section class="tours-listing">

        <!-- Treks -->
        <?php
        foreach ($treks as $trek):
            $id = $trek['id'] ?? '';
            $title = $trek['title'] ?? '';
            $sub_title = $trek['sub_title'] ?? '';
            $description = $trek['description'] ?? '';
            $imageFilePath = $trek['image_path'] ?? '';
            $day_number = $trek['duration'] ?? '';
            $destinations = $trek['key_destinations'] ?? '';
            $experience = $trek['experience'] ?? '';
            $theme = $trek['theme'] ?? '';
            $altitude = $trek['altitude'] ?? '';
            include '../../includes/templates/trek/trekCard.html.php';
        endforeach;
        ?>
    </section>

    <!-- Footer -->
    <?php require_once '../../includes/templates/footer.html.php'; ?>

    <script>
        <?php include '../../Js/javascript.js'; ?>
    </script>