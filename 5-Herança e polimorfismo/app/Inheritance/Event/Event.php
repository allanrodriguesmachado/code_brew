<?php

namespace App\Inheritance\Event;

class Event
{
    private string $event;
    private \DateTime $date;
    private float $price;
    private array $register;
    protected mixed $vacancies;

    public function __construct(string $event, \DateTime $date, float $price, mixed $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register(string $fullName, string $email): void
    {
        if ($this->vacancies >= 1) {
            $this->vacancies -= 1;
            $this->setRegister($fullName, $email);
            return;
        }

        throw new \InvalidArgumentException('Attention! invalid');
    }

    public function setRegister(string $fullName, string $email): array
    {
        return $this->register = [
            "name" => $fullName,
            "email" => $email
        ];
    }
}