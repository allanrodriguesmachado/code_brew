<?php

use App\Interpretation\Address;
use App\Interpretation\User;

require __DIR__ . '/vendor/autoload.php';

$addEvent = new Address();
$addEvent->setAddress('R. Machado', '233');
$allan = new User(
    'Allan',
    'Rodrigues',
    'allan@php.com.br',
    $addEvent,
);

$rodriguesAddress = clone $addEvent;
$rodrigues = new User(
    'Machado',
    'Teste',
    'allan@php.com.br',
    $rodriguesAddress,
);


dd($allan, $rodrigues);



