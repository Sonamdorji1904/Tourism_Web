<?php

require_once "./connects/TrekItineraries.php";

$trekId = $_POST["trek_id"] ?? null;

if (empty($trekId)) {
    error_log('No trek_id found in POST data');
    echo "<script>alert('Error: No trek selected. Please start from the trek details page.'); window.history.back();</script>";
    exit();
}

$trekId = intval($trekId);
if ($trekId <= 0) {
    echo "<script>alert('Error: Invalid trek id.'); window.history.back();</script>";
    exit();
}

$dayTitles = $_POST["day_titles"] ?? [];
$dayDescriptions = $_POST["day_descriptions"] ?? [];
$dayMeals = $_POST["day_meals"] ?? [];
$dayAccommodations = $_POST["day_accommodations"] ?? [];

$dayTitles = is_array($dayTitles) ? $dayTitles : ($dayTitles ? [$dayTitles] : []);
$dayDescriptions = is_array($dayDescriptions) ? $dayDescriptions : ($dayDescriptions ? [$dayDescriptions] : []);
$dayMeals = is_array($dayMeals) ? $dayMeals : ($dayMeals ? [$dayMeals] : []);
$dayAccommodations = is_array($dayAccommodations) ? $dayAccommodations : ($dayAccommodations ? [$dayAccommodations] : []);

if (empty($dayTitles)) {
    echo "<script>alert('Error: No itinerary days provided.'); window.history.back();</script>";
    exit();
}

$validate = true;
$numDays = count($dayTitles);

if (
    count($dayDescriptions) !== $numDays || count($dayMeals) !== $numDays || count($dayAccommodations) !== $numDays
) {
    $validate = false;
    echo "<script>alert('Error: Mismatched day data. Please ensure all fields are filled.'); window.history.back();</script>";
    exit();
}

$itinerary = new TrekItineraries();
$insertedCount = 0;
$failedCount = 0;

for ($i = 0; $i < $numDays; $i++) {
    $dayNum = $i + 1;

    $dayData = [
        "trek_id" => $trekId,
        "day_number" => $dayNum,
        "title" => htmlspecialchars(trim($dayTitles[$i])),
        "description" => htmlspecialchars(trim($dayDescriptions[$i])),
        "meals" => htmlspecialchars(trim($dayMeals[$i])),
        "accomodation" => htmlspecialchars(trim($dayAccommodations[$i])),
    ];

    try {
        if ($itinerary->saveContent($dayData)) {
            $insertedCount++;
        } else {
            $failedCount++;
            error_log("Failed to insert itinerary day {$dayNum} for trek_id {$trekId}");
        }
    } catch (Throwable $e) {
        $failedCount++;
        error_log("Exception inserting itinerary day {$dayNum}: " . $e->getMessage());
    }
}

if ($failedCount === 0 && $insertedCount > 0 && $validate) {
    echo "<script>
        alert('Success! {$insertedCount} days of itinerary have been saved.');
        window.location.href = '../admin/view/treks.php';
      </script>";
    exit();
} else {
    $msg = "Error: {$failedCount} out of {$numDays} days failed to save. Please check server logs.";
    echo "<script>alert('{$msg}'); window.history.back();</script>";
    exit();
}
