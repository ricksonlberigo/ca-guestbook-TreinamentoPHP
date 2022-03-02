<?php

require_once __DIR__ . '/../../src/repository/guestbookRepository.php';

$config = parse_ini_file(__DIR__ . '/../../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
  $email = $_POST['email'];
  deleteVisitorInEmail($email);
  header('Location: listTemplate.php', true, 303);
  exit(0);
}

$email = $_GET['email'];
$visitor = findInVisitor($email);
$error = '';
if (!$visitor) {
  $error .= 'Não encontrado';
}
