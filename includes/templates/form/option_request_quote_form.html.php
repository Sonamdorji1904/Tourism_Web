<?php

if (!isset($tours)) {
    $tours = [];
    $fetchPath = __DIR__ . '/../../../controller/fetch_all_tours.php';
    if (file_exists($fetchPath)) {
        include $fetchPath;
        $tours = $tours ?? [];
    }
}

$duration = $duration ?? '';
?>

<form class="contact-form-detailed" action="./controller/submit_request_quote.php" method="post">
    <div class="form-row">
        <div class="form-group">
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" name="lastName">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone">
        </div>
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" id="country" name="country" placeholder="Start typing country...">

        <div id="country-list" class="dropdown-list"></div>
    </div>

    <div class="form-group">
        <label for="tour">Interested Tour Package</label>
        <select name="tour" id="tour" required>
            <option value="">Select Tour</option>
            <?php foreach ($tours as $tour): ?>
                <?php $tourTitle = $tour['title'] ?? '';
                $tourDuration = $tour['duration'] ?? '';
                $isCustomFlag = !empty($tour['is_custom']) && $tour['is_custom'] ? 'true' : 'false'; ?>
                <option
                    value="<?= htmlspecialchars($tour['id']); ?>"
                    data-duration="<?= htmlspecialchars($tourDuration); ?>"
                    data-custom="<?= $isCustomFlag; ?>"
                    data-title="<?= htmlspecialchars($tourTitle); ?>">
                    <?= htmlspecialchars($tourTitle) . ' (' . htmlspecialchars($tourDuration) . ')' ?>
                </option>
            <?php endforeach; ?>
            <option value="custom" data-duration="" data-custom="true" data-title="Custom Tour">Customise Tour</option>
        </select>

    </div>

    <div class="form-group">
        <label for="duration">Duration (Days)</label>
        <div style="display:flex;gap:12px;align-items:center;">
            <input type="text" value="<?= $stringHelper->safeDisplay($duration) ?>" id="duration" name="duration" readonly placeholder="0" />
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="travelers_male">Number of Male Travelers</label>
            <input type="number" id="travelers_male" name="travelers_male" min="0" value="0">
        </div>
        <div class="form-group">
            <label for="travelers_female">Number of Female Travelers</label>
            <input type="number" id="travelers_female" name="travelers_female" min="0" value="0">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="travelers_minor">Number of Minor Travelers</label>
            <input type="number" id="travelers_minor" name="travelers_minor" min="0" value="0">
        </div>
        <div class="form-group">
            <label for="travelDate">Preferred Travel Date</label>
            <input type="date" id="travelDate" name="travelDate">
        </div>
    </div>

    <div class="form-group">
        <label for="meal">Meal Types</label>
        <select id="meal" name="meal">
            <option value="">Select a meal type (optional)</option>
            <option value="EP">European Plan (EP)</option>
            <option value="CP">Continental Plan (CP)</option>
            <option value="BP">Bermuda Plan (BP)</option>
            <option value="MAP">Modified American Plan (MAP)</option>
            <option value="AP">American Plan (AP)</option>
        </select>
    </div>

    <div class="form-group">
        <label for="meal">Accommodation</label>
        <select id="accomodation" name="accomodation">
            <option value="">Select a meal type (optional)</option>
            <option value="3-Star Hotels">3-Star Hotels</option>
            <option value="4-Star Hotels">4-Star Hotels</option>
            <option value="5-Star Luxury">5-Star Luxury</option>
            <option value="Boutique Properties">Boutique Properties</option>
            <option value="Traditional Homestays">Traditional Homestays</option>
        </select>
    </div>


    <div class="form-group">
        <label for="message">Your Message *</label>
        <textarea id="message" name="message" rows="6" required placeholder="Tell us about your travel plans, interests, and any special requirements..."></textarea>
    </div>
    <div class="form-group">
        <div class="g-recaptcha mb-20" data-sitekey="6LdY3CQsAAAAAFX0mYQwdDiDAuOzA9w-g_x_E_CR"></div>
    </div>

    <button type="submit" class="btn btn-primary btn-full">Request quote</button>
</form>