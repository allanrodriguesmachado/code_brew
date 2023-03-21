<?php

use App\Class\User;

require __DIR__ . '/vendor/autoload.php';

$user = new User();

$user->firstName = "Allan";
$user->lastName = "Rodrigues";
$user->email = "allan@php.com";

echo "O email de {$user->firstName} é {$user->email} \n";


$user->alterFirstName('All');
$user->setLastName('Rodrigues');
$user->setEmail('allan@php.com.br');
dd($user);