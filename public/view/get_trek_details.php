<?php
$trekTitle = '';
$sub_title = '';
$duration = '';
$overview = '';
$bestTime = '';
$trekItineraries = [];
$trekId = isset($_GET['id']) ? intval($_GET['id']) : null;
if ($trekId) {
    require_once __DIR__ . '/../../controller/connects/Treks.php';
    require_once __DIR__ . '/../../controller/connects/TrekDetails.php';
    require_once __DIR__ . '/../../controller/connects/TrekItineraries.php';

    try {
        $trekCardModel = new Treks();
        $trekDetails = new TrekDetails();
        $trekTrekItineraries = new TrekItineraries();
        $trekItineraries = $trekTrekItineraries->findTrekItineraryByTrekId($trekId);
        $row = $trekCardModel->findTrekById($trekId);
        if ($row) {
            $trekTitle = $row['title'];
            $sub_title = $row['sub_title'];
            $duration = $row['duration'];
        }
        $trekDetailRows = $trekDetails->findTrekDetailByTrekId($trekId);

        if (!empty($trekDetailRows)) {
            $firstRow = $trekDetailRows[0];
            $overview = $firstRow['over_view'] ?? '';
            $bestTime = $firstRow['best_time'] ?? '';
        }
    } catch (Throwable $e) {
        error_log('Could not load trek title for id ' . $trekId . ': ' . $e->getMessage());
    }
}
include_once __DIR__ . '/trek_details.php';
