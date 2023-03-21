<?php

namespace App\Related;

class Address
{
    private string $street;
    private string $number;

    public function __construct(string $street, $number)
    {
        $this->street = $street;
        $this->number = $number;
    }
}