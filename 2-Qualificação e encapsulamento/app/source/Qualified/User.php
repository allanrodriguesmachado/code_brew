<?php

namespace App\Source\Qualified;

class User
{
    private string $firstName;
    private string $lastName;
    private string $email;

    public function createUser(string $firstName, string $lastName, string $email): void
    {
        $this->setUserName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
    }
    private function setUserName(string $firstName): void
    {
        if (mb_strlen($firstName) < 5) {
            throw new \InvalidArgumentException('Attention! name invalid');
        }

        $this->firstName = $firstName;
    }

    private function setLastName(string $lastName): void
    {
        if (mb_strlen($lastName) < 5) {
            throw new \InvalidArgumentException('Attention! name invalid');
        }

        $this->lastName = $lastName;
    }

    private function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Attention! E-mail invalid');
        }

        $this->email = $email;
    }
}