<?php
require_once __DIR__ . "/connects/Treks.php";

try {
    $Treks = new Treks();
    $treks = $Treks->findAllTrek();

    $response = [
        'success' => true,
        'data' => $treks ?? [],
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
