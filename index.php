<?php

include __DIR__ . 'Email.php';

$user = new Email('serega@mail.ru', 'Письмо', 'мое письмо');
$user -> send();