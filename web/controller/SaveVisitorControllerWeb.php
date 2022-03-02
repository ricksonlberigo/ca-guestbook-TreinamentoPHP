<?php

require_once __DIR__ . '/../../src/controller/SaveVisitorController.php';

$config = parse_ini_file(__DIR__ . '/../../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

if ('POST' === $_SERVER['REQUEST_METHOD']) {
  // Normalize do POST
  $visitor = [
    'email' => $_POST['visitorEmail'] ?? NULL,
    'name' => $_POST['visitorName'] ?? NULL
  ];

  try {
    saveVisitor($visitor);
    echo 'Visitante salvo com sucesso';
  } catch (\Exception $e) {
    header('Content-Type: text/html; charset=utf-8', true, 400);
    echo $e->getMessage() . '<br><a href="' . $_SERVER['HTTP_REFERER'] . '">Voltar para a home</a>';
  }
}
