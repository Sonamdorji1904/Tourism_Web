<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . "/connects/Treks.php";

// Required fields
$requiredFields = ["title", "subtitle", "description", "duration", "destinations", "exprience", "theme", "altitude"];
foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $validate = false;
        echo "<script>alert('Please fill all required fields. Missing: {$field}'); window.history.back();</script>";
        exit();
    }
}

$uploadedImagePath = null;
if (isset($_FILES['trek_image']) && $_FILES['trek_image']['error'] !== UPLOAD_ERR_NO_FILE) {
    $file = $_FILES['trek_image'];

    if ($file['error'] !== UPLOAD_ERR_OK) {
        // Detailed diagnostics for upload failure
        $diag = [
            'error_code' => $file['error'],
            'upload_max_filesize' => ini_get('upload_max_filesize'),
            'post_max_size' => ini_get('post_max_size'),
            'max_file_uploads' => ini_get('max_file_uploads'),
            'tmp_dir' => sys_get_temp_dir(),
            'file_array' => [
                'name' => $file['name'],
                'type' => $file['type'],
                'size' => $file['size'],
                'tmp_name_exists' => isset($file['tmp_name']) && file_exists($file['tmp_name'])
            ]
        ];
        error_log('Upload failed diagnostics: ' . print_r($diag, true));
        echo "<script>alert('Error uploading file. Check server logs for details.'); window.history.back();</script>";
        exit();
    }

    // Validate size (max 5MB)
    $maxBytes = 5 * 1024 * 1024;
    if ($file['size'] > $maxBytes) {
        echo "<script>alert('Uploaded file is too large (max 5MB).'); window.history.back();</script>";
        exit();
    }

    // Validate MIME type
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($file['tmp_name']);
    $allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];
    if (!array_key_exists($mime, $allowed)) {
        echo "<script>alert('Invalid image type. Only JPG, PNG or WEBP allowed.'); window.history.back();</script>";
        exit();
    }

    // Prepare uploads directory
    $uploadsDir = __DIR__ . '/../uploads/trek_images';
    if (!is_dir($uploadsDir)) {
        if (!mkdir($uploadsDir, 0777, true) && !is_dir($uploadsDir)) {
            error_log('Failed to create uploads directory: ' . $uploadsDir);
            echo "<script>alert('Server error creating upload directory.'); window.history.back();</script>";
            exit();
        }
    }

    // Generate a safe unique filename
    $baseName = bin2hex(random_bytes(8));
    $extension = $allowed[$mime];
    $filename = sprintf('%s_%s.%s', $baseName, time(), $extension);
    $destination = $uploadsDir . '/' . $filename;

    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        $moveDiag = [
            'tmp_name' => $file['tmp_name'],
            'tmp_exists' => file_exists($file['tmp_name']),
            'destination' => $destination,
            'is_writable_dir' => is_writable(dirname($destination)),
            'uploads_dir' => dirname($destination),
        ];
        error_log('Failed to move uploaded file. Details: ' . print_r($moveDiag, true));
        echo "<script>alert('Failed to save uploaded file. Check server logs for details.'); window.history.back();</script>";
        exit();
    }

    $uploadedImagePath = 'uploads/trek_images/' . $filename;
}

$data = [
    'title' => htmlspecialchars(trim($_POST['title'])),
    'sub_title' => htmlspecialchars(trim($_POST['subtitle'])),
    'description' => htmlspecialchars(trim($_POST['description'])),
    'duration' => htmlspecialchars(trim($_POST['duration'])),
    'image_path' => $uploadedImagePath,
    'key_destinations' => htmlspecialchars(trim($_POST['destinations'])),
    'experience' => htmlspecialchars(trim($_POST['exprience'])),
    'theme' => htmlspecialchars(trim($_POST['theme'])),
    'altitude' => htmlspecialchars(trim($_POST['altitude'] ?? '')),
];

$treks = new Treks();
error_log('Tour save data: ' . print_r($data, true));
try {
    $saveStatus = $treks->saveContent($data);
} catch (Throwable $e) {
    error_log('DB save error: ' . $e->getMessage());
    $saveStatus = false;
}

if ($saveStatus) {
    $insertedId = method_exists($trek, 'getLastInsertId') ? $treks->getLastInsertId() : '';
    if ($insertedId) {
        header('Location: ../admin/tour_details.php?tour_id=' . urlencode($insertedId));
    } else {
        header('Location: ../admin/tour_details.php?success=1');
    }
    exit();
} else {
    echo "<script>alert('There was an error saving your tour package. Please check server logs.'); window.history.back();</script>";
    exit();
}
