<?php
require_once __DIR__ . '/connects/Festival.php';
$festival = new Festival();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin/view/festivals.php');
    exit;
}

$festivalId = intval($_POST['id'] ?? 0);
if ($festivalId <= 0) {
    die('Invalid festival id');
}

$fields = [
    'title' => trim($_POST['title'] ?? ''),
    'description' => trim($_POST['description'] ?? ''),
    'date' => trim($_POST['date'] ?? ''),
    'category' => trim($_POST['category'] ?? ''),
    'status' => trim($_POST['status'] ?? ''),
    'venue' => trim($_POST['venue'] ?? ''),
];

if ($fields['title'] === '') {
    die('Title is required');
}

if (!empty($_FILES['image']['name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {

    $currentFestival = $festival->findFestivalById($festivalId);

    $currentImagePath = null;
    if ($currentFestival && !empty($currentFestival['image'])) {
        $currentImagePath = $currentFestival['image'];
    }

    $uploadDir = __DIR__ . '/../uploads/festival_images/';
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
        $fields['image'] = 'uploads/festival_images/' . $filename;
    } else {
        error_log('Image upload failed for festival id ' . $festivalId);
    }
}

$updated = $festival->updateFestival($festivalId, $fields);

if ($updated) {
    header('Location: ../admin/view/festivals.php');
    exit;
} else {
    die('Update failed. Check logs.');
}
