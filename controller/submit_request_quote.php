<?php
require "../vendor/autoload.php";
require_once "./connects/Contact.php";
require_once "../helper/MailService.php";
$secretKey = '6LdY3CQsAAAAAK_NVXf-v9ZfxIn8wRAw6eGJ5U5d';

$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptchaResponse)) {
    die('reCAPTCHA verification failed. Please go back and confirm you are not a robot.');
}

$verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

$data = [
    'secret'   => $secretKey,
    'response' => $recaptchaResponse,
    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? null
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    ]
];

$context  = stream_context_create($options);
$result   = file_get_contents($verifyUrl, false, $context);
$resultObj = json_decode($result, true);

if (empty($resultObj['success'])) {
    die('reCAPTCHA verification failed. Please try again.');
    echo "<script>
            alert('reCAPTCHA verification failed. Please try again.');
            window.history.back();
          </script>";
}

$adminEmailsString = ConfigLoader::env('AdminMailAddress');
$emailList = $adminEmailsString ? explode(',', $adminEmailsString) : ["fallback@example.com"];

$adminEmails = [];
foreach ($emailList as $email) {
    $email = trim($email);
    if ($email !== '') {
        $adminEmails[$email] = 'Site Admin';
    }
}
$travelers = $_POST["travelers_male"] + $_POST["travelers_female"] + $_POST["travelers_minor"];
if ($travelers <= 0) {
    echo "<script>
        alert('Please specify at least one traveler.');
        window.history.back();
      </script>";
}

$requiredFields = ["firstName", "email", "country", "travelDate"];

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
    "travelers_male"    => intval($_POST["travelers_male"] ?? 0),
    "travelers_female"  => intval($_POST["travelers_female"] ?? 0),
    "travelers_minor"   => intval($_POST["travelers_minor"] ?? 0),
    "travel_date"  => $_POST["travelDate"] ?? null,
    "accomodation" => htmlspecialchars(trim($_POST["accomodation"] ?? "")),
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
Number of Male Travelers: {$data['travelers_male']}
Number of Female: {$data['travelers_female']}
Number of Minor Travelers: {$data['travelers_minor']}
Travel Date: {$data['travel_date']}
Accomodation: {$data['accomodation']}
Meal Plan: {$data['meal']}

Message:
{$data['message']}
";

// === 4. Send Mail using MailService ===
$mailStatus = MailService::sendToMultiple(
    $adminEmails,
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
