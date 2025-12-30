<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Tours - Happiness Horizon Travel</title>

    <link rel="stylesheet" href="../../Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfai...ily=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once __DIR__ . '/../../helper/auth.php';
    requireAdmin();
    require_once __DIR__ . '/../../includes/templates/adminHeader.html.php';
    require '../../controller/fetch_all_tours.php';
    ?>

    <section class="tour-detail-hero" data-hero="../../public/bg2.jpg">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Tours for Every Dream</h1>
            <p>

                Choose from our carefully curated tour packages...offer a unique perspective of Bhutan's beauty and culture</p>
        </div>
    </section>

    <section class="tours-listing">
        <div class="tour-card-container">
            <div class="tours-listing-top">
                <a href="../add_tour.php" class="btn btn-outline">Add Tour</a>
            </div>

            <div class="tours-grid-extended">
                <?php
                foreach ($tours as $tour):
                    $id = $tour['id'] ?? '';
                    $title = $tour['title'] ?? '';
                    $sub_title = $tour['sub_title'] ?? '';
                    $description = $tour['description'] ?? '';
                    $duration = $tour['duration'] ?? '';
                    $imageFilePath = $tour['image_path'] ?? '';
                    $day_number = $tour['duration'] ?? '';
                    $destinations = $tour['key_destinations'] ?? '';
                    $experience = $tour['experience'] ?? '';
                    $theme = $tour['theme'] ?? '';
                    $transportation = $tour['transportation'] ?? '';
                    $status = $tour['status'] ?? '';
                    include '../../includes/templates/tour/tourCard.html.php';
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <?php require_once '../../includes/templates/footer.html.php'; ?>

    <script>
        <?php include '../../Js/javascript.js'; ?>
    </script>
</body>

</html>