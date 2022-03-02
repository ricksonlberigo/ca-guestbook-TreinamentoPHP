<?php

require_once __DIR__ . '/../repository/guestbookRepository.php';

function deleteVisitorController(string $email)
{
  deleteVisitorInEmail($email);
}
