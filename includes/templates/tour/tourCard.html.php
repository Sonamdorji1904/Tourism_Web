<?php

require_once __DIR__ . '/../../../helper/StringHelper.php';
$stringHelper = new StringHelper();
?>
<div class="container" style="margin-top: 30px;">
    <div class="tour-card-extended">
        <div class="tour-image-extended">
            <?php

            $src = $imageFilePath ?? '';
            if ($src !== '' && !preg_match('#^(?:https?://|/)#i', $src)) {
                $src = '../../' . ltrim($src, '/');
            }
            $srcEsc = htmlspecialchars($src);
            $altText = htmlspecialchars($title ?? 'Tour Image');
            ?>
            <img src="<?php echo $srcEsc; ?>" alt="<?php echo $altText; ?>">
            <div class="tour-badge"><?php echo (int)$stringHelper->safeDisplay($day_number) ?> Days</div>
        </div>

        <div class="tour-content-extended">
            <h3>
                <?php echo $stringHelper->safeDisplay($title) ?>
            </h3>
            <p class="tour-tagline"><?php echo $stringHelper->safeDisplay($sub_title) ?></p>
            <p class="tour-description"><?php echo $stringHelper->safeDisplay($description) ?></p>

            <div class="tour-highlights-extended">
                <h4>Tour Highlights</h4>
                <ul>
                    <li>Transportation : <?php echo $stringHelper->safeDisplay($transportation) ?></li>
                    <li>Signature_experience : <?php echo $stringHelper->safeDisplay($experience) ?></li>
                    <li>Theme : <?php echo $stringHelper->safeDisplay($theme) ?></li>
                </ul>
            </div>

            <div class="tour-destinations">
                <strong>Destinations:</strong> <?php echo $stringHelper->safeDisplay($destinations); ?>
            </div>

            <div class="tour-actions">
                <a href="../../admin/update_tour.php?id=<?php echo urlencode($tour['id'] ?? ''); ?>" class="btn btn-primary">Update tour</a>
                <a href="../../controller/delete_tour.php?id=<?php echo urlencode($tour['id'] ?? ''); ?>" class="btn btn-outline" onclick="return confirm('Are you sure you want to delete this tour?');">Delete tour</a>
                <a href="../../admin/view/tour_details.php?id=<?php echo urlencode($tour['id'] ?? ''); ?>" class="btn btn-outline">Read more</a>
            </div>
        </div>
    </div>
</div>