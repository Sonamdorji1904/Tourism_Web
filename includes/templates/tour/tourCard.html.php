<div class="tour-card-extended">
    <div class="tour-image-extended">
        <img src="<?php $imageFilePath ?>" alt="Quick Bhutan Getaway">
        <div class="tour-badge"><?php echo htmlspecialchars($day_number) ?> Days</div>
    </div>
    <div class="tour-content-extended">
        <h3>
            <?php echo htmlspecialchars($title) ?>
        </h3>
        <p class="tour-tagline"><?php echo htmlspecialchars($sub_title) ?></p>
        <p class="tour-description"><?php echo htmlspecialchars($description) ?></p>

        <div class="tour-highlights-extended">
            <h4>Tour Highlights</h4>
            <ul>
                <li>Hike to the legendary Taktsang Monastery (Tiger's Nest)</li>
                <li>Explore Thimphu's cultural landmarks</li>
                <li>Visit Punakha Dzong and Chhimi Lhakhang</li>
                <li>Experience authentic Bhutanese cuisine</li>
            </ul>
        </div>

        <div class="tour-destinations">
            <strong>Destinations:</strong> <?php echo htmlspecialchars($destinations); ?>
        </div>
    </div>
</div>