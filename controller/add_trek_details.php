<?php
require_once "./connects/TrekDetails.php";

// === 1. Validate Required Fields ===
$requiredFields = ["trek_id", "over_view"];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $validate = false;
        echo "<script>
            alert('Please fill all required fields.');
            window.history.back();
          </script>";
        exit();
    }
}

$data = [
    "trek_id"      => htmlspecialchars(trim($_POST["trek_id"])),
    "over_view"    => htmlspecialchars(trim($_POST["over_view"])),
];

$trekDetails = new TrekDetails();
$saveStatus = $trekDetails->saveContent($data);

if ($saveStatus) {
    echo "<script>
            alert('Thank you! Your tour details have been submitted successfully.');
            window.location.href = '../admin/trek_itinerary.php?trek_id=" . urlencode($data['trek_id']) . "';
          </script>";
    exit();
} else {
    echo "<script>alert('There was an error saving your tour detail. Please check server logs.'); window.history.back();</script>";
    exit();
}
