<?php
require_once __DIR__ . '/connects/Treks.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin/view/treks.php');
    exit;
}

$trekId = intval($_POST['id'] ?? 0);
if ($trekId <= 0) {
    die('Invalid trek id');
}

$fields = [
    'title' => trim($_POST['title'] ?? ''),
    'description' => trim($_POST['description'] ?? ''),
    'duration' => trim($_POST['duration'] ?? ''),
    'key_destinations' => trim($_POST['key_destinations'] ?? ''),
    'experience' => trim($_POST['experience'] ?? ''),
    'theme' => trim($_POST['theme'] ?? ''),
    'altitude' => trim($_POST['altitude'] ?? '')
];

if ($fields['title'] === '') {
    die('Title is required');
}

if (!empty($_FILES['image']['name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
    $trekCard = new Treks();
    $currentTrek = $trekCard->findTrekById($trekId);

    $currentImagePath = null;
    if ($currentTrek && !empty($currentTrek['image_path'])) {
        $currentImagePath = $currentTrek['image_path'];
    }

    $uploadDir = __DIR__ . '/../uploads/trek_images/';
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
        $fields['image_path'] = 'uploads/trek_images/' . $filename;
    } else {
        error_log('Image upload failed for trek id ' . $trekId);
    }
}

$trekCard = new Treks();

$updated = $trekCard->updateTrek($trekId, $fields);

if ($updated) {
    header('Location: ../admin/view/treks.php');
    exit;
} else {
    die('Update failed. Check logs.');
}
