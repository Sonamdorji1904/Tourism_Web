<?php
require_once __DIR__ . '/../helper/auth.php';

logout();

header('Location: ../index.html.php');
exit;
