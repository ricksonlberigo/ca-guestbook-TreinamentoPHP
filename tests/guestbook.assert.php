<?php

require_once __DIR__ . '/../src/repository/guestbookRepository.php';

$assertFile = 'guestbook.assert.csv';
putenv('GUESTBOOK=' . $assertFile);

$visitor = [
  'email' => 'teste@gmail.com',
  'name' => 'teste'
];

saveVisitorInDB($visitor);
assert(
  strstr(file_get_contents($assertFile), $visitor['email']),
  new \Exception('não funcionou a função')
);

$foundedVisitor = findInVisitor($visitor['email']);
assert($foundedVisitor == $visitor, new \Exception('Não encontrou o visitor'));

deleteVisitorInEmail($visitor['email']);
assert(0 < filesize($assertFile), new \Exception('Apagou a menos'));
