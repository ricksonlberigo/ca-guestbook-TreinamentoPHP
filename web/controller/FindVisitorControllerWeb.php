<?php

require_once __DIR__ . '/../../src/controller/FindVisitorController.php';

$config = parse_ini_file(__DIR__ . '/../../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

$email = $_GET['email'];
$visitor = findVisitor($email);
$error .= '';
if (!$visitor) {
  $error .= 'Não encontrado';
}
