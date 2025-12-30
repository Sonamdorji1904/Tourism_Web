<?php
$heading = "Interested Tour Package";
$tourTitle = $tourTitle ?? '';
if ($trekTitle) {
    $tourTitle = $trekTitle;
    $heading = "Interested Trek Package";
}
?>
<h3>Plan Your Dream Trip - Get a Quote</h3>
<div class="price-info">
    <p class="price-note">Price varies based on group size and accommodation choice</p>
</div>
<form class="quick-booking-form" action="./controller/submit_request_quote.php" method="post">
    <div class="form-group">
        <label>Full Name *</label>
        <input type="text" name="firstName" required>
    </div>
    <div class="form-group">
        <label for="email">Email Address *</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" id="country" name="country" placeholder="Start typing country...">
        <div id="country-list" class="dropdown-list"></div>
    </div>

    <div class="form-group">
        <label for="tour"><?php echo $heading ?></label>
        <input type="text" value="<?php echo $stringHelper->safeDisplay($tourTitle) ?>" id="tour" name="tour" readonly>
    </div>
    <?php
    // Before the input (in the same file)
    $durationDays = '';
    if (!empty($duration)) {
        if (preg_match('/\d+/', (string)$duration, $matches)) {
            $durationDays = $matches[0]; // first number found
        }
    }
    ?>
    <?php if ($tourTitle == "customise tour" || $tourTitle == "Honeymoon: Two Hearts, One Kingdom"): ?>
        <div class="form-group">
            <label for="duration">Custom Duration (Days)</label>
            <input type="number"
                value="1" id="duration" name="duration" placeholder="Enter number of days" min="1" required>
        </div>
    <?php else: ?>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="number" value="<?php echo $stringHelper->safeDisplay($durationDays) ?>" id="duration" name="duration" readonly class="readonly-field">
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label>Travel Date</label>
        <input type="date" name="travelDate" required>
    </div>
    <div class="form-group">
        <label>Number of Male Travelers</label>
        <input type="number" min="0" value="0" name="travelers_male" required>
    </div>
    <div class="form-group">
        <label>Number of Female Travelers</label>
        <input type="number" min="0" value="0" name="travelers_female" required>
    </div>
    <div class="form-group">
        <label>Number of Minor Travelers</label>
        <input type="number" min="0" value="0" name="travelers_minor" required>
    </div>
    <div class="form-group">
        <label>Accommodation</label>
        <select name="accomodation" required>
            <option value="">Select</option>
            <option value="3star">3-Star Hotel</option>
            <option value="4star">4-Star Hotel</option>
            <option value="5star">5-Star Hotel</option>
            <option value="boutique">Boutique Property</option>
            <option value="homestay">Homestay</option>
        </select>
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
        <div class="g-recaptcha mb-20" data-sitekey="6LdY3CQsAAAAAFX0mYQwdDiDAuOzA9w-g_x_E_CR"></div>
    </div>

    <button type="submit" class="btn btn-primary btn-full">Request Quote</button>
</form>
<div class="contact-options">
    <p>Or contact us directly:</p>
    <a href="tel:+97516108570" class="contact-link"><svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
            <path d="M6.62 10.79a15.054 15.054 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1v3.5a1 1 0 01-1 1C10.29 21.5 2.5 13.71 2.5 3.5A1 1 0 013.5 2.5H7a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.01l-2.2 2.2z" />
        </svg>+975 16108570</a>
    <a href="mailto:info@happinesshorizontravel.com" class="contact-link"><svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
            <path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5L4 8V6l8 5 8-5v2z" />
        </svg>Email Us</a>
    <a href="https://wa.me/+97516108570" class="contact-link"><svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:8px;fill:currentColor" aria-hidden="true">
            <path d="M20.5 3.5A11.94 11.94 0 0012 0C5.372 0 .001 5.373.001 12A11.94 11.94 0 004.5 20.5L3 24l3.6-1.3A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12 0-1.86-.38-3.63-1.1-5.2zM16.2 14c-.3.8-1.7 1.5-2.4 1.6-.6.1-1.2.1-2.9-.9-2.5-1.5-4-4.2-4.4-4.7-.4-.5-.1-.8.3-1.1.2-.2.5-.3.8-.1.2.1.6.3.9.6.3.3.4.5.6.9.2.4.1.7-.1 1-.2.2-.4.5-.4.8 0 .3.8 1.6 1.9 2.6 1.3 1.2 2.6 1.7 3.1 1.8.5.1 1 .1 1.4-.1.5-.2 1.4-.8 1.7-1.5.3-.6.3-1.1.2-1.2-.1-.2-.7-.3-1.7-.8-.9-.4-1.6-.8-1.9-1.1-.3-.3-.2-.5.1-.8.3-.3.8-.8 1.1-1.1.3-.3.6-.4.8-.3.2.1.6.2 1.1.6.4.3 1 .9 1.2 1.1.2.3.2.8-.1 1.6z" />
        </svg>WhatsApp</a>
</div>