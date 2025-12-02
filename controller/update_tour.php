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

// Collect fields
$fields = [
    'title' => trim($_POST['title'] ?? ''),
    'description' => trim($_POST['description'] ?? ''),
    'duration' => trim($_POST['duration'] ?? ''),
    'key_destinations' => trim($_POST['key_destinations'] ?? ''),
    'experience' => trim($_POST['experience'] ?? ''),
    'theme' => trim($_POST['theme'] ?? ''),
    'transportation' => trim($_POST['transportation'] ?? '')
];

// Basic validation example
if ($fields['title'] === '') {
    die('Title is required');
}

// Handle image upload (optional)
if (!empty($_FILES['image']['name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
    $uploadDir = __DIR__ . '/../public/uploads/tour_images/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

    // sanitize filename
    $basename = preg_replace('/[^A-Za-z0-9._-]/', '_', basename($_FILES['image']['name']));
    $filename = time() . '_' . $basename;
    $targetPath = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        // store web relative path used in templates
        $fields['image_path'] = 'public/uploads/tour_images/' . $filename;
    } else {
        error_log('Image upload failed for tour id ' . $tourId);
        // optional: set an error message in session and redirect back
    }
}

$tourCard = new TourCard();

// Use model wrapper
$updated = $tourCard->updateTourById($tourId, $fields);

if ($updated) {
    header('Location: ../admin/view/tours.php');
    exit;
} else {
    die('Update failed. Check logs.');
}
