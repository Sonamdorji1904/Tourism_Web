<?php
require_once __DIR__ . '/connects/TourCard.php';

$id = intval($_GET['id'] ?? 0);
if ($id <= 0) {
    header('Location: ../admin/view/tours.php');
    exit;
}

$tourCard = new TourCard();

// Optionally fetch the tour first to unlink image file
$tour = $tourCard->findTourById($id);
if ($tour && !empty($tour['image_path'])) {
    $file = __DIR__ . '/../' . ltrim($tour['image_path'], '/');
    if (file_exists($file)) {
        @unlink($file);
    }
}

$success = $tourCard->deleteTourById($id);
header('Location: ../admin/view/tours.php');
exit;
