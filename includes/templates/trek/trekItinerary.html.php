    <div class="accordion-item itinerary-day">
        <button class="accordion-button" aria-expanded="false" id="<?php echo $stringHelper->safeDisplay($buttonId) ?>" aria-controls="<?php echo $stringHelper->safeDisplay($panelId) ?>">
            <span class="day-number">Day <?php echo $stringHelper->safeDisplay($dayNumber) ?></span>
            <span class="accordion-title"><?php echo $stringHelper->safeDisplay($accordionTitle) ?></span>
            <span class="chev" aria-hidden="true">▾</span>
        </button>
        <div id="<?php echo $stringHelper->safeDisplay($panelId) ?>" class="accordion-panel" role="region" aria-labelledby="<?php echo $stringHelper->safeDisplay($buttonId) ?>" hidden>
            <div class="day-content">
                <p><?php echo $stringHelper->safeDisplay($description) ?></p>
                <p><strong>Meals:</strong><?php echo $stringHelper->safeDisplay($meals) ?></p>
                <p><strong>Camp Site:</strong> <?php echo $stringHelper->safeDisplay($accommodation_options) ?></p>
                <?php $user = $_SESSION['username'];
                if ($user === 'admin') :
                ?>
                    <a href="update_trek_itinerary.html.php?id=<?php echo urlencode($itineraryId ?? ''); ?>" class="btn btn-primary">Update trek</a>
                    <a href="../../deleteTrekItinerary.php?itinerary_id=<?= $itineraryId ?>&trek_id=<?= $trekId ?>" class="btn btn-outline" onclick="return confirm('Are you sure you want to delete this Itinerary?');">Delete trek</a>
                <?php endif; ?>
            </div>
        </div>
    </div>