<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Tours - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php require_once __DIR__ . '/../../includes/templates/adminHeader.html.php'; ?>

    <?php require '../../controller/fetch_all_tours.php'; ?>

    <!-- Tours Grid -->
    <section class="tours-listing">

        <!-- Tours -->
        <?php
        foreach ($tours as $tour):
            $id = $tour['id'] ?? '';
            $title = $tour['title'] ?? '';
            $sub_title = $tour['sub_title'] ?? '';
            $description = $tour['description'] ?? '';
            $imageFilePath = $tour['image_path'] ?? '';
            $day_number = $tour['duration'] ?? '';
            $destinations = $tour['key_destinations'] ?? '';
            $experience = $tour['experience'] ?? '';
            $theme = $tour['theme'] ?? '';
            $transportation = $tour['transportation'] ?? '';
            include '../../includes/templates/tour/tourCard.html.php';
        endforeach;
        ?>
    </section>

    <!-- Footer -->
    <?php require_once '../../includes/templates/footer.html.php'; ?>

    <script>
        <?php include '../../Js/javascript.js'; ?>
    </script>