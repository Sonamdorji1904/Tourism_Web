<?php
require_once __DIR__ . '/../helper/auth.php';

logout();

header('Location: ../public/view/index.html.php');
exit;
