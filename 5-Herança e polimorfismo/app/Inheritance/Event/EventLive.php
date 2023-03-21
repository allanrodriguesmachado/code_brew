<?php

namespace App\Inheritance\Event;

use App\Inheritance\Address;

class EventLive extends Event
{
    private Address $address;

    public function __construct(string $event, \DateTime $date, float $price, string $vacancies,  Address $address)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }
}