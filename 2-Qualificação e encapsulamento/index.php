<?php

use App\Class\App\Template;
use App\Class\Web\Template AS WebTemplate;
use App\Source\Qualified\User;

require __DIR__ . '/vendor/autoload.php';

$app = new Template();
$web = new WebTemplate();

$createUser = new User();
$createUser->createUser(
    'Allan',
    'Rodrigues',
    'allan@php.com.br'
);

var_dump($createUser);