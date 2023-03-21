<?php

namespace App\Related;

class User
{
    private string $job;
    private string $firstName;
    private string $lastName;

    public function __construct(string $job, string $firstName, string $lastName)
    {
        $this->job = $job;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}