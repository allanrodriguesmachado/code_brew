<?php

namespace App\Inheritance;

class Address
{
    private string $street;
    private string $number;
    private string $complement;

    public function __construct(string $street, string $number, string $complement = 'null')
    {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
    }
}