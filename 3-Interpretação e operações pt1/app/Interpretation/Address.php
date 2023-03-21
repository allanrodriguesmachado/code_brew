<?php

namespace App\Interpretation;

class Address
{
    private string $street;
    private string $number;

    public function setAddress(string $street, string $number): void
    {
        $this->setStreet($street);
        $this->setNumber($number);
    }

    private function setNumber(string $number): void
    {
        $this->number = $number;
    }

    private function setStreet(string $street): void
    {
        $this->street = $street;
    }
}