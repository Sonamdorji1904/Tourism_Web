<div class="tour-card">
    <div class="tour-image">
        <img src="<?php echo $imageFilePath; ?>" alt="Taste of Happiness">
        <div class="tour-duration"><?php echo $stringHelper->safeDisplay((int)$duration); ?> Days</div>
    </div>
    <div class="tour-content">
        <h3><?php echo $stringHelper->safeDisplay($title); ?></h3>
        <p><?php echo $stringHelper->safeDisplay($sub_title); ?></p>
        <a href="/Happiness horizone/admin/get_tour_details.php?id=<?php echo urlencode($itinerayId ?? ''); ?>" class="btn btn-outline">View Details</a>
    </div>
</div>