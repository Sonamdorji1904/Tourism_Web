<?php


$dayNumber = isset($_GET['day']) ? (int)$_GET['day'] : 1;

if ($dayNumber < 1) {
    $dayNumber = 1;
}

include "../includes/templates/form/itinerary_form.html.php";
