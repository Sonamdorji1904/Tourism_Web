<?php
require_once __DIR__ . '/connects/Festival.php';

$id = intval($_GET['id'] ?? 0);
if ($id <= 0) {
    header('Location: ../admin/view/festivals.php');
    exit;
}

$festivals = new Festival();

$festival = $festivals->findFestivalById($id);
if ($festival && !empty($festival['image_path'])) {
    $file = __DIR__ . '/../' . ltrim($festival['image_path'], '/');
    if (file_exists($file)) {
        @unlink($file);
    }
}

$success = $festivals->deleteFestival($id);
header('Location: ../admin/view/festivals.php');
exit;
