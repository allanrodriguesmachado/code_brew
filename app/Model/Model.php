<?php

namespace App\Model;

use PDOException;

abstract class Model
{
    protected ?object $data;
    protected ?PDOException $fail;
    protected ?string $message;

    public function data(): ?object
    {
        return $this->data;
    }

    public function fail(): ?PDOException
    {
        return $this->fail;
    }

    public function message(): ?string
    {
        return $this->message;
    }

    protected function create()
    {
    }

    protected function read()
    {
    }

    protected function update()
    {
    }

    protected function delete()
    {
    }

    protected function safe()
    {
    }

    private function filter()
    {
    }
}