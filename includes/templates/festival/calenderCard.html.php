<?php
$rawTitle = $title ?? '';
$safeTitle = $stringHelper->safeDisplay($rawTitle);
$slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($safeTitle));
$slug = trim($slug, '-');
?>
<div class="month-festivals">
    <a href="#<?php echo $slug; ?>" class="calendar-item" aria-label="Jump to <?php echo htmlspecialchars($safeTitle); ?> details">
        <strong><?php echo $safeTitle; ?></strong>
        <span><?php echo $stringHelper->safeDisplay($venue); ?></span>
    </a>
</div>