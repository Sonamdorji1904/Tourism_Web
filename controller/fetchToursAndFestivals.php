<?php require_once __DIR__ . '/connects/TourCard.php';
require_once __DIR__ . '/connects/Festival.php';
try {
    $tourCard = new TourCard();
    $festival = new Festival();

    $tours = $tourCard->getAllToursLimit(6);
    $festivals = $festival->getAllFestivalsLimit(6);

    $response = [
        'success' => true,
        'tours' => $tours ?? [],
        'festivals' => $festivals ?? [],
    ];
} catch (Throwable $e) {
    error_log('Error fetching tours and festivals: ' . $e->getMessage());
    $response = [
        'success' => false,
        'error' => 'Failed to fetch tours and festivals',
        'message' => $e->getMessage()
    ];
}
