<?php
$tourTitle = '';
$sub_title = '';
$duration = '';
$overview = '';
$bestTime = '';
$highlightPoints = [];
$tourItineraries = [];
$tourId = isset($_GET['id']) ? intval($_GET['id']) : null;
if ($tourId) {
    require_once __DIR__ . '/../controller/connects/TourCard.php';
    require_once __DIR__ . '/../controller/connects/TourDetails.php';
    require_once __DIR__ . '/../controller/connects/Itinerary.php';

    try {
        $tourCardModel = new TourCard();
        $tourDetails = new TourDetails();
        $tourItinerary = new Itinerary();
        $tourItineraries = $tourItinerary->findTourItineraryByTourId($tourId);
        $tourDetail = $tourDetails->findTourDetailByTourId($tourId);
        $row = $tourCardModel->findTourById($tourId);
        if ($row) {
            $tourTitle = $row['title'];
            $sub_title = $row['sub_title'];
            $duration = $row['duration'];
        }
        if ($tourDetail) {
            $overview = $tourDetail['over_view'];
            $highlights = $tourDetail['tour_highlights'];
            $bestTime = $tourDetail['best_time'];
            $highlightPoints = explode("\n", trim($highlights));
        }
    } catch (Throwable $e) {
        error_log('Could not load tour title for id ' . $tourId . ': ' . $e->getMessage());
    }
}
include_once __DIR__ . '/view/tour_details.php';
