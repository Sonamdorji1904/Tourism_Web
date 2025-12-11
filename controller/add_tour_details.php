<?php
require_once "./connects/TourDetails.php";

// === 1. Validate Required Fields ===
$requiredFields = ["tour_id", "over_view", "best_time", "tour_highlights"];

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
    "tour_id"      => htmlspecialchars(trim($_POST["tour_id"])),
    "best_time"  => htmlspecialchars(trim($_POST["best_time"])),
    "over_view"    => htmlspecialchars(trim($_POST["over_view"])),
    "tour_highlights" => htmlspecialchars(trim($_POST["tour_highlights"])),
];

$tourDetails = new TourDetails();
$saveStatus = $tourDetails->saveContent($data);

if ($saveStatus) {
    echo "<script>
            alert('Thank you! Your tour details have been submitted successfully.');
            window.location.href = '../admin/tour_detailed_itinerary.php?tour_id=" . urlencode($data['tour_id']) . "';
          </script>";
    exit();
} else {
    echo "<script>alert('There was an error saving your tour detail. Please check server logs.'); window.history.back();</script>";
    exit();
}
