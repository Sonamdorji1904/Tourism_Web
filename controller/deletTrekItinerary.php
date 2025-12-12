<?php
require_once __DIR__ . '/connects/TrekItineraries.php';

$itineraryId = intval($_GET['itinerary_id'] ?? 0);

$trekId      = intval($_GET['trek_id'] ?? 0);

if ($itineraryId <= 0 || $trekId <= 0) {
    die('Invalid IDs');
}

$itinerary = new TrekItineraries();
$success = $itinerary->deleteTrekItineraryById($itineraryId);

if ($success) {
    header("Location: ../admin/get_trek_details.php?id=$trekId");
    exit;
} else {
    die('Delete failed. Check logs.');
}
