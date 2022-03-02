<?php

require_once __DIR__ . '/../../src/controller/ListAllVisitorsController.php';

$config = parse_ini_file(__DIR__ . '/../../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

// Normalize do GET
$email = $_GET['email'] ?? NULL;
$visitors = listAllVisitorsInScreen($email);
