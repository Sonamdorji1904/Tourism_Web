<?php

// Basic error reporting for debugging (disable on production)
ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . "/../../connects/Festival.php";

// Required fields
// $requiredFields = ["title", "description", "duration", "date", "venue", "status"];
// foreach ($requiredFields as $field) {
//     if (empty($_POST[$field])) {
//         echo "<script>alert('Please fill all required fields. Missing: {$field}'); window.history.back();</script>";
//         exit();
//     }
// }

// Validate and handle uploaded image (optional)
$uploadedImagePath = null;
if (isset($_FILES['festival_image']) && $_FILES['festival_image']['error'] !== UPLOAD_ERR_NO_FILE) {
    $file = $_FILES['festival_image'];

    // Check for upload errors
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
    $uploadsDir = __DIR__ . '/../../uploads/festival_images';
    if (!is_dir($uploadsDir)) {
        if (!mkdir($uploadsDir, 0755, true) && !is_dir($uploadsDir)) {
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

    $uploadedImagePath = 'uploads/festival_images/' . $filename;
}

$data = [
    'title' => htmlspecialchars(trim($_POST['title'])),
    'description' => htmlspecialchars(trim($_POST['description'])),
    'venue' => htmlspecialchars(trim($_POST['venue'])),
    'image' => $uploadedImagePath,
    'date' => htmlspecialchars(trim($_POST['date'])),
    'status' => htmlspecialchars(trim($_POST['status'])),
];

$dateInput = trim($_POST['date'] ?? ''); // Use null coalescing for safety

if (empty($dateInput)) {
    $data['date'] = NULL;
} else {
    $data['date'] = htmlspecialchars($dateInput);
}

$festival = new Festival();
try {
    $saveStatus = $festival->saveContent($data);
} catch (Throwable $e) {
    error_log('DB save error: ' . $e->getMessage());
    $saveStatus = false;
}

if ($saveStatus) {
    echo "<script>
            alert('Thank you! Your message has been sent successfully.');
            window.location.href = '/../../festival/add_festival.php';
          </script>";
    exit();
} else {
    $errorMessage = "Something went wrong. ";
    if (!$saveStatus) {
        $errorMessage .= "Database save failed. ";
    }

    echo "<script>
            alert('$errorMessage');
            window.history.back();
          </script>";
    exit();
}
