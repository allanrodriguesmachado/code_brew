<?php

use App\Related\Address;
use App\Related\Company;
use App\Related\Product;

require __DIR__ . '/vendor/autoload.php';

$company = new Company();
$address = new Address('Av. Central', '123');
$productPHP = new Product('Full Stack PHP', 1994.00);
$productLaravel = new Product('Laravel Developer', 997.00);

$company->addTeamMember('Developer', 'Allan', 'Machado');
$company->bootCompany('Developer Web', $address);
$company->addProduct($productPHP);
$company->addProduct($productLaravel);

foreach ($company->getProducts() AS $product) {
    {$product->getName();}
}

dd($company);