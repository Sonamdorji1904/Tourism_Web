<div class="tour-card">
    <div class="tour-image">
        <img src="<?php echo $imageFilePath; ?>" alt="Taste of Happiness">
        <?php if ($status === 'Customizable') : ?>
            <div class="tour-duration">Custom</div>
        <?php else : ?>
            <div class="tour-duration"><?php echo $stringHelper->safeDisplay((int)$duration); ?> Days</div>
        <?php endif; ?>
    </div>
    <div class="tour-content">
        <h3><?php echo $stringHelper->safeDisplay($title); ?></h3>
        <p><?php echo $stringHelper->safeDisplay($sub_title); ?></p>
        <a href="get_tour_details.php?id=<?php echo urlencode($itinerayId ?? ''); ?>" class="btn btn-outline">View Details</a>
    </div>
</div>