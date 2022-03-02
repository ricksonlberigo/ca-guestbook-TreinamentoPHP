<?php

require_once __DIR__ . '/../repository/guestbookRepository.php';

function listAllVisitors(string $email)
{
  listAllVisitorsInScreen($email);
}
