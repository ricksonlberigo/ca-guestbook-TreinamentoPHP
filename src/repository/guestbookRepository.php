<?php

function connect()
{
  $db = getenv('GUESTBOOK');
  // var_dump($db);
  // exit(0);
  return fopen($db, 'a+');
}

function close($handle)
{
  fclose($handle);
}

function saveVisitorInDB(array $visitor)
{
  $handle = connect();
  fputcsv($handle, $visitor);
  close($handle);
}
