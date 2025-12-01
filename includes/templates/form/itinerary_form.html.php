<?php
$dayNumber = $dayNumber ?? 1;
?>

<div class="itinerary-section" id="itinerary-section-<?php echo $dayNumber; ?>" data-day="<?php echo $dayNumber; ?>">
    <div class="day-number">
        <h2>Day <?php echo $dayNumber; ?></h2>
    </div>

    <div class="form-group">
        <input id="tour_id" name="tour_id" type="hidden" value="<?php echo $tourId ? htmlspecialchars($tourId) : ''; ?>" />
        <label for="day_<?php echo $dayNumber; ?>_title">Day Title:</label>
        <input id="day_<?php echo $dayNumber; ?>_title" name="day_titles" type="text" required
            placeholder="e.g., Arrival in Paris, Exploring the City">
    </div>

    <div class="form-group">
        <label for="day_<?php echo $dayNumber; ?>_description">Day Summary / Description:</label>
        <textarea id="day_<?php echo $dayNumber; ?>_description" name="day_descriptions[]" required
            placeholder="Add detailed description of the day's activities and experiences"><?php echo isset($day_description) ? htmlspecialchars($day_description) : ''; ?></textarea>
    </div>

    <div class="form-group">
        <label for="day_<?php echo $dayNumber; ?>_activities">Activities (Bullet Points):</label>
        <textarea id="day_<?php echo $dayNumber; ?>_activities" name="day_activities[]" required
            placeholder="Visit National Memorial Chorten.(/) 
Explore Kaja Throm (Farmers' Market)"><?php echo isset($day_activities) ? htmlspecialchars($day_activities) : ''; ?></textarea>
        <small class="form-text">Enter each activities seprate by back slash (/). They will be displayed as bullet points</small>
    </div>

    <div class="form-group">
        <label for="day_<?php echo $dayNumber; ?>_meal">Meals:</label>
        <input id="day_<?php echo $dayNumber; ?>_meal" name="day_meals[]" type="text" required
            placeholder="e.g., Hilton Paris Opera">
    </div>


    <div class="form-group">
        <label for="day_<?php echo $dayNumber; ?>_accommodation">Accommodation:</label>
        <input id="day_<?php echo $dayNumber; ?>_accommodation" name="day_accommodations[]" type="text" required
            placeholder="e.g., Hilton Paris Opera">
    </div>

    <?php if ($dayNumber > 1): ?>
        <button type="button" class="remove-itinerary-btn">Remove This Day</button>
    <?php endif; ?>

    <hr>
</div>