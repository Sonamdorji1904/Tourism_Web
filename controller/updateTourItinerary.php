<?php
require_once __DIR__ . '/connects/Itinerary.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin/view/tours.php');
    exit;
}

$itineraryId = intval($_POST['id'] ?? 0);
if ($itineraryId <= 0) {
    die('Invalid tour id');
}

$fields = [
    'day_number' => (int)trim($_POST['day_number'] ?? ''),
    'title' => trim($_POST['title'] ?? ''),
    'description' => trim($_POST['description'] ?? ''),
    'activities' => trim($_POST['activities'] ?? ''),
    'meals' => trim($_POST['meals'] ?? ''),
    'accomodation' => trim($_POST['accomodation'] ?? '')
];


$tourCard = new Itinerary();

$updated = $tourCard->updateTourItinerary($itineraryId, $fields);

if ($updated) {
    header('Location: ../admin/view/tours.php');
    exit;
} else {
    die('Update failed. Check logs.');
}
