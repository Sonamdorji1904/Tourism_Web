<div class="accordion-item itinerary-day">
    <button class="accordion-button" aria-expanded="false" id="<?php echo $stringHelper->safeDisplay($buttonId) ?>" aria-controls="<?php echo $stringHelper->safeDisplay($panelId) ?>">
        <span class="day-number">Day <?php echo $stringHelper->safeDisplay($dayNumber) ?></span>
        <span class="accordion-title"><?php echo $stringHelper->safeDisplay($accordionTitle) ?></span>
        <span class="chev" aria-hidden="true">▾</span>
    </button>
    <div id="<?php echo $stringHelper->safeDisplay($panelId) ?>" class="accordion-panel" role="region" aria-labelledby="<?php echo $stringHelper->safeDisplay($buttonId) ?>" hidden>
        <div class="day-content">
            <p><?php echo $stringHelper->safeDisplay($description) ?></p>
            <ul>
                <?php
                $activitiesArray = explode("\n", $activities);
                foreach ($activitiesArray as $point) {
                    $point = trim($point);
                    if (!empty($point)) {
                        echo '<li>' . $stringHelper->safeDisplay($point) . '</li>';
                    }
                }
                ?>
            </ul>
            <p><strong>Meals:</strong><?php echo $stringHelper->safeDisplay($meals) ?></p>
            <p><strong>Accommodation:</strong> <?php echo $stringHelper->safeDisplay($accommodation_options) ?></p>
            <a href="/Happiness%20horizone/admin/view/update_tour_itinerary.html.php?id=<?php echo urlencode($id ?? ''); ?>" class="btn btn-primary">Update tour</a>
            <a href="/Happiness%20horizone/controller/deleteTourItinerary.php?itinerary_id=<?= $itineraryId ?>&tour_id=<?= $tourId ?>" class="btn btn-outline" onclick="return confirm('Are you sure you want to delete this Itinerary?');">Delete tour</a>
        </div>
    </div>
</div>