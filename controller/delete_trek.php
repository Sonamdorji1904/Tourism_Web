<?php
require_once __DIR__ . '/connects/Treks.php';

$id = intval($_GET['id'] ?? 0);
if ($id <= 0) {
    header('Location: ../admin/view/tours.php');
    exit;
}

$tourCard = new Treks();

$tour = $tourCard->findTrekById($id);
if ($tour && !empty($tour['image_path'])) {
    $file = __DIR__ . '/../' . ltrim($tour['image_path'], '/');
    if (file_exists($file)) {
        @unlink($file);
    }
}

$success = $tourCard->deleteTreak($id);
header('Location: ../admin/view/tours.php');
exit;
