<?php

namespace App\Related;

class Company
{
    private string $company;
    private Address $address;
    private array $team;
    private array $products;

    public function bootCompany(string $company, Address $address): void
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function addTeamMember(string $job, string $firstName, string $lastName): User
    {
        return $this->team[] = new User($job, $firstName, $lastName);
    }
    public function getProducts(): array
    {
        return $this->products;
    }
}