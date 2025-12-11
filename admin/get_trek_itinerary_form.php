<?php

$dayNumber = isset($_GET['day']) ? (int)$_GET['day'] : 1;
$trekId = isset($_GET['trek_id']) ? intval($_GET['trek_id']) : null;

if ($dayNumber < 1) {
    $dayNumber = 1;
}

include "../includes/templates/form/trek_itineray_form.html.php";
