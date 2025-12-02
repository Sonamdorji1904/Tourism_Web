<?php

use BcMath\Number;

function safeDisplay($text)
{
    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

    $text = htmlspecialchars($text, ENT_NOQUOTES, 'UTF-8', false);

    return $text;
}
?>

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
        <div class="tour-badge"><?php echo (int)safeDisplay($day_number) ?> Days</div>
    </div>
    <div class="tour-content-extended">
        <h3>
            <?php echo safeDisplay($title) ?>
        </h3>
        <p class="tour-tagline"><?php echo safeDisplay($sub_title) ?></p>
        <p class="tour-description"><?php echo safeDisplay($description) ?></p>

        <div class="tour-highlights-extended">
            <h4>Tour Highlights</h4>
            <ul>
                <li>Transportation : <?php echo safeDisplay($transportation) ?></li>
                <li>Signature_experience : <?php echo safeDisplay($experience) ?></li>
                <li>Theme : <?php echo safeDisplay($theme) ?></li>
            </ul>
        </div>

        <div class="tour-destinations">
            <strong>Destinations:</strong> <?php echo safeDisplay($destinations); ?>
        </div>

        <div class="tour-actions">
            <a href="../../admin/update_tour.php?id=<?php echo urlencode($tour['id'] ?? ''); ?>" class="btn btn-primary">Update tour</a>
            <a href="../../controller/delete_tour.php?id=<?php echo urlencode($tour['id'] ?? ''); ?>" class="btn btn-outline" onclick="return confirm('Are you sure you want to delete this tour?');">Delete tour</a>
            <a href="tour-detail.html.php?id=<?php echo urlencode($tour['id'] ?? ''); ?>" class="btn btn-outline">Read more</a>
        </div>
    </div>
</div>