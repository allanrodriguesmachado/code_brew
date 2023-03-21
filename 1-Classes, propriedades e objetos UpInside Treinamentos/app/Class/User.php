<?php

namespace App\Class;

class User
{
    public string $firstName;
    public string $lastName;
    public string $email;

    public function alterFirstName(string $firstName): void
    {
        if (mb_strlen($firstName) < 5) {
            throw new \InvalidArgumentException('Attention! name invalid');
        }

        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        if (mb_strlen($lastName) < 5) {
            throw new \InvalidArgumentException('Attention! name invalid');
        }

        $this->lastName = $lastName;
    }

    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Attention! E-mail invalid');
        }

        $this->email = $email;
    }
}