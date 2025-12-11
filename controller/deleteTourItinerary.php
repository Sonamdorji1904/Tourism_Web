<?php
require_once __DIR__ . '/connects/Itinerary.php';

$itineraryId = intval($_GET['itinerary_id'] ?? 0);

$tourId      = intval($_GET['tour_id'] ?? 0);

if ($itineraryId <= 0 || $tourId <= 0) {
    die('Invalid IDs');
}

$itinerary = new Itinerary();
$success = $itinerary->deleteTourItineraryById($itineraryId);

if ($success) {
    header("Location: ../admin/get_tour_details.php?id=$tourId");
    exit;
} else {
    die('Delete failed. Check logs.');
}
