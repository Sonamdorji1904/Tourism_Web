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
        <select id="tour" name="tour">
            <option value="">Select a tour (optional)</option>
            <option value="5-day">Quick Bhutan Getaway (5 Days)</option>
            <option value="6-day">Taste of Happiness (6 Days)</option>
            <option value="7-day">The Living Heritage (7 Days)</option>
            <option value="8-day">Journey Through Culture (8 Days)</option>
            <option value="9-day">Best of Bhutan (9 Days)</option>
            <option value="honeymoon">Honeymoon Package</option>
            <option value="custom">Custom Tour</option>
        </select>
    </div>

    <!-- <div class="form-group">
        <label for="tour">Duration</label>
        <input type="number" value="<?php echo $stringHelper->safeDisplay($duration) ?>" id="duration" name="duration" readonly>
    </div> -->

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