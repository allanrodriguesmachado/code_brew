<?php

use App\Members\Config as ConstConfig;

require_once __DIR__ . '/vendor/autoload.php';

$configuration = new ConstConfig();

$reflection = new ReflectionClass(ConstConfig::class);

ConstConfig::$company = "Developer";
ConstConfig::$domain = "PHP";
ConstConfig::$sector = "Developer";

$configuration::setConfig("", "", "");

dd([
    $reflection->getConstants(),
    $reflection->getProperties(),
    $reflection->getDefaultProperties()
]);