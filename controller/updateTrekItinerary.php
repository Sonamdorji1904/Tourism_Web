<?php
require_once __DIR__ . '/connects/TrekItineraries.php';

$itineraryId = intval($_POST['id'] ?? 0);
if ($itineraryId <= 0) {
    die('Invalid tour id');
}

$fields = [
    'day_number' => (int)trim($_POST['day_number'] ?? ''),
    'title' => trim($_POST['title'] ?? ''),
    'description' => trim($_POST['description'] ?? ''),
    'meals' => trim($_POST['meals'] ?? ''),
    'accomodation' => trim($_POST['accomodation'] ?? '')
];


$tourCard = new TrekItineraries();

$updated = $tourCard->updateTrekItinerary($itineraryId, $fields);

if ($updated) {
    header('Location: ../admin/view/treks.php');
    exit;
} else {
    die('Update failed. Check logs.');
}
