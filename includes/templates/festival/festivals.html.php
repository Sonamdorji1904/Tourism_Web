<?php
$rawTitle = $title ?? '';
$safeTitle = $stringHelper->safeDisplay($rawTitle);
$slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($safeTitle));
$slug = trim($slug, '-');
?>
<a href="festivals.php#<?php echo $slug; ?>" class="festival-card festival-link" role="link"
    aria-label="<?php echo htmlspecialchars($safeTitle); ?> - Festivals" title="<?php echo htmlspecialchars($safeTitle); ?>">
    <h3><?php echo $safeTitle; ?></h3>
    <p class="festival-time"><?php echo $stringHelper->safeDisplay($category) ?></p>
    <p><?php echo $stringHelper->safeDisplay($description) ?></p>
</a>