<?php
require "../vendor/autoload.php";
require_once "./connects/Contact.php";
require_once "../helper/MailService.php";

$adminEmailsString = ConfigLoader::env('AdminMailAddress');
$adminEmails = $adminEmailsString ? explode(',', $adminEmailsString) : ["fallback@example.com"];


// === 1. Validate Required Fields ===
$requiredFields = ["firstName", "email", "country", "travelDate", "travelers"];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        echo "<script>
            alert('Please fill all required fields.');
            window.history.back();
          </script>";
    }
}


$first = trim($_POST["firstName"]);
$last  = trim($_POST["lastName"]);

$fullName = $first . " " . $last;

$data = [
    "full_name"   => htmlspecialchars($fullName),
    "email"        => filter_var($_POST["email"], FILTER_SANITIZE_EMAIL),
    "phone"        => htmlspecialchars(trim($_POST["phone"] ?? "")),
    "country"      => htmlspecialchars(trim($_POST["country"] ?? "")),
    "tour"         => htmlspecialchars(trim($_POST["tour"] ?? "")),
    "travelers"    => intval($_POST["travelers"] ?? 1),
    "travel_date"  => $_POST["travelDate"] ?? null,
    "accomodation"         => htmlspecialchars(trim($_POST["accomodation"] ?? "")),
    "meal"         => htmlspecialchars(trim($_POST["meal"] ?? "")),
    "message"      => htmlspecialchars(trim($_POST["message"])),
];

// === 3. Save to Database ===
$contact = new Contact();
$saveStatus = $contact->saveMessage($data);

$emailMessage = "
A new contact form has been submitted:

Name: {$data['full_name']}
Email: {$data['email']}
Phone: {$data['phone']}
Country: {$data['country']}

Tour Package: {$data['tour']}
Travelers: {$data['travelers']}
Travel Date: {$data['travel_date']}
Accomodation: {$data['accomodation']}
Meal Plan: {$data['meal']}

Message:
{$data['message']}
";

// === 4. Send Mail using MailService ===
$mailStatus = MailService::sendToMultiple(
    $adminEmail,
    "Site Admin",
    "New Contact Form Submission – Happiness Horizon Travel",
    $emailMessage
);

// === 5. Final Response ===
if ($saveStatus && $mailStatus) {
    echo "<script>
            alert('Thank you! Your message has been sent successfully.');
            window.location.href = '../index.html.php';
          </script>";
    exit();
} else {
    $errorMessage = "Something went wrong. ";
    if (!$saveStatus) {
        $errorMessage .= "Database save failed. ";
    }
    if (!$mailStatus) {
        $errorMessage .= "Email sending failed. Please check server error logs.";
    }

    echo "<script>
            alert('$errorMessage');
            window.history.back();
          </script>";
    exit();
}
