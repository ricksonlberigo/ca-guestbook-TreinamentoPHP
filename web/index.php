<?php

require_once __DIR__ . '/../lib/templateHandler.php';

$config = parse_ini_file(__DIR__ . '/../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

render('template/indexTemplate.php');
