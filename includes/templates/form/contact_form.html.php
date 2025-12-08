<?php

?>
<form class="contact-form-detailed" action="./controller/submit_message.php" method="post">
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
        <input type="text" id="country" name="country">
    </div>

    <div class="form-group">
        <label for="message">Your Message *</label>
        <textarea id="message" name="message" rows="6" required placeholder="Tell us about your travel plans, interests, and any special requirements..."></textarea>
    </div>


    <button type="submit" class="btn btn-primary btn-full">Send Message</button>
</form>