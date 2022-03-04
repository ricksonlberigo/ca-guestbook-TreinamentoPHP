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
function deleteVisitorInEmail(string $email)
{
  $handle = connect();
  $tmp = fopen('tmp_delete.csv', 'w');
  while (false === feof($handle)) {
    $register = fgetcsv($handle);
    if ($register && $register[0] != $email) {
      fputcsv($tmp, $register);
    }
  }
  close($handle);
  fclose($tmp);
  unlink(getenv('GUESTBOOK'));
  rename('tmp_delete.csv', getenv('GUESTBOOK'));
}

// Find Visitor
function findInVisitor(string $email)
{
  $handle = connect();
  while (false === feof($handle)) {
    $register = fgetcsv($handle);
    if ($register && $register[0] === $email) {
      return [
        'email' => $register[0],
        'name' => $register[1],
      ];
    }
  }
  close($handle);
  return NULL;
}
