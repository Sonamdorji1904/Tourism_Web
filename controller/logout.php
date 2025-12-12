<?php
require_once __DIR__ . '/../helper/auth.php';

logout();

header('Location: ../login.php');
exit;
