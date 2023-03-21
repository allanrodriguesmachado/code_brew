<?php

namespace App\Inheritance\Event;

class EventOnline extends Event
{
    private string $link;

    public function __construct(string $event, \DateTime $date, float $price, string $link, mixed $vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }
    public function register(string $fullName, string $email): void
    {
        $this->vacancies += 1;
        $this->setRegister($fullName, $email);

    }
}