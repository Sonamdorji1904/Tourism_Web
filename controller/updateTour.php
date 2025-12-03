<?php
require_once __DIR__ . '/connects/TourCard.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin/view/tours.php');
    exit;
}

$tourId = intval($_POST['id'] ?? 0);
if ($tourId <= 0) {
    die('Invalid tour id');
}

$fields = [
    'title' => trim($_POST['title'] ?? ''),
    'description' => trim($_POST['description'] ?? ''),
    'duration' => trim($_POST['duration'] ?? ''),
    'key_destinations' => trim($_POST['key_destinations'] ?? ''),
    'experience' => trim($_POST['experience'] ?? ''),
    'theme' => trim($_POST['theme'] ?? ''),
    'transportation' => trim($_POST['transportation'] ?? '')
];

if ($fields['title'] === '') {
    die('Title is required');
}

if (!empty($_FILES['image']['name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
    $tourCard = new TourCard();
    $currentTour = $tourCard->findTourById($tourId);

    $currentImagePath = null;
    if ($currentTour && !empty($currentTour['image_path'])) {
        $currentImagePath = $currentTour['image_path'];
    }

    $uploadDir = __DIR__ . '/../uploads/tour_images/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $basename = preg_replace('/[^A-Za-z0-9._-]/', '_', basename($_FILES['image']['name']));
    $filename = time() . '_' . $basename;
    $targetPath = $uploadDir . $filename;

    if ($currentImagePath) {
        $oldImageAbsolutePath = __DIR__ . '/../' . $currentImagePath;

        if (file_exists($oldImageAbsolutePath) && is_file($oldImageAbsolutePath)) {
            if (!unlink($oldImageAbsolutePath)) {
                error_log("Failed to delete old image: $oldImageAbsolutePath");
            } else {
                error_log("Successfully deleted old image: $currentImagePath");
            }
        } else {
            error_log("Old image not found or not a file: $oldImageAbsolutePath");
        }
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        $fields['image_path'] = 'uploads/tour_images/' . $filename;
    } else {
        error_log('Image upload failed for tour id ' . $tourId);
    }
}

$tourCard = new TourCard();

$updated = $tourCard->updateTourById($tourId, $fields);

if ($updated) {
    header('Location: ../admin/view/tours.php');
    exit;
} else {
    die('Update failed. Check logs.');
}
