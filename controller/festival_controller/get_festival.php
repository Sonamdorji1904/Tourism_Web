<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . "/../connects/Festival.php";


$festivalModel = new Festival();
$allFestivals = $festivalModel->getAllFestivals();
$groupedFestivals = [];

foreach ($allFestivals as $festival) {
    $category = $festival['category'] ?? 'Uncategorized';
    $groupedFestivals[$category][] = $festival;
}

$upComingFestivals = [];
$currentDate = new DateTime();
foreach ($allFestivals as $festival) {
    $festivalDate = DateTime::createFromFormat('Y-m-d', $festival['date']);
    if ($festivalDate && $festivalDate >= $currentDate) {
        $upComingFestivals[] = $festival;
    }
}
