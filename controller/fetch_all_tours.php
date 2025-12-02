<?php
require_once __DIR__ . "/connects/TourCard.php";

try {
    $tourCard = new TourCard();
    $tours = $tourCard->findAllTours();

    $totalCount = $tourCard->getTourCount();

    $response = [
        'success' => true,
        'data' => $tours ?? [],
        'total' => $totalCount
    ];
} catch (Throwable $e) {
    error_log('Error fetching tours: ' . $e->getMessage());
    $response = [
        'success' => false,
        'error' => 'Failed to fetch tours',
        'message' => $e->getMessage()
    ];
}

if (isset($_GET['json'])) {
    header('Content-Type: application/json');
    echo json_encode($response);
}
