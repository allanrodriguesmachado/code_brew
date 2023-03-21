<?php

use App\Inheritance\Address;
use App\Inheritance\Event\{Event, EventLive, EventOnline};

require_once __DIR__ . '/vendor/autoload.php';

/**
 * EVENT
 */
$createEvent = new Event(
    "WorkShop PHP",
    new DateTime('2023-04-23 15:00'),
    2500,
    "4"
);
$createEvent->register('John Doe', 'Johndoe@php.com.br');
$createEvent->register('John Doe', 'Johndoe@php.com.br');
$createEvent->register('John Doe', 'Johndoe@php.com.br');
$createEvent->register('John Doe', 'Johndoe@php.com.br');

/**
 * EVENT LIVE
 */
$createdAddress = new Address('Av. Centro', '23 B');
$createEventLive = new EventLive(
    "WorkShop PHP",
    new DateTime('2023-04-23 15:00'),
    2500,
    "4",
    $createdAddress
);

$createEventLive->register('John Doe', 'Johndoe@php.com.br');
$createEventLive->register('John Doe', 'Johndoe@php.com.br');
$createEventLive->register('John Doe', 'Johndoe@php.com.br');

/**
 * Event Online
 */
$createEventOnline = new EventOnline(
    "WorkShop PHP",
    new DateTime('2023-04-23 15:00'),
    196.00,
    "https://eventphp.com.br",
);

$createEventOnline->register('John Doe', 'Johndoe@php.com.br');
$createEventOnline->register('John Doe', 'Johndoe@php.com.br');
$createEventOnline->register('John Doe', 'Johndoe@php.com.br');
$createEventOnline->register('John Doe', 'Johndoe@php.com.br');

dd([
    'Event' => $createEvent,
    'Event Live' => $createEventLive,
    'Event Online' => $createEventOnline
]);