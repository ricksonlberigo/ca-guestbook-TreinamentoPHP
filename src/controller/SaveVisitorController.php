<?php

require_once __DIR__ . '/../repository/guestbookRepository.php';

function saveVisitor(array $visitor)
{
  // Validation
  if (!$visitor['email']) {
    throw new \Exception('Informe o campo e-mail para continuar com a assinatura');
  }
  if (!$visitor['name']) {
    throw new \Exception('Informe o campo nome para continuar com a assinatura');
  }

  saveVisitorInDB($visitor);
}
