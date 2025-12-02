<?php

// Enable error display for debugging
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Corrected path to include the Festival model class: 
require_once __DIR__ . "/../connects/Festival.php";

// --- Logic to Fetch Festival Data ---

$festivalModel = new Festival();


try {
    $allFestivals = $festivalModel->getAllFestivals(); 
    error_log('Festival data: ' . print_r($allFestivals, true));
} catch (Throwable $e) {
    error_log("Database error fetching festivals: " . $e->getMessage());
    $allFestivals = []; 
}

// --- End of Logic ---

?>