<?php

function connect()
{
  $db = getenv('GUESTBOOK');
  return fopen($db, 'a+');
}

function close($handle)
{
  fclose($handle);
}

// Save Visitor
function saveVisitorInDB(array $visitor)
{
  $handle = connect();
  fputcsv($handle, $visitor);
  close($handle);
}

// Find Visitor
function findVisitor(string $email)
{
  $handle = connect();
  while (false === feof($handle)) {
    $register = fgetcsv($handle);
    if ($register && $register[0] == $email) {
      return [
        'email' => $register[0],
        'name' => $register[1],
      ];
    }
  }
  close($handle);
  return NULL;
}

// List All Visitor
function listAllVisitorsInScreen(string $email = null)
{
  $handle = connect();
  while (false === feof($handle)) {
    $register = fgetcsv($handle);
    if ($register) {
      if (!$email) {
        yield [
          'email' => $register[0],
          'name' => $register[1],
        ];
      } else if ($email === $register[0]) {
        yield [
          'email' => $register[0],
          'name' => $register[1],
        ];
      }
    }
  }
  close($handle);
}

// Delete Visitor