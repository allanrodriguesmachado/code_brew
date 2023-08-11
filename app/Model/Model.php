<?php

namespace App\Model;

use App\Database\Connection;
use PDO;
use PDOException;
use PDOStatement;

abstract class Model
{
    protected object|null $data;
    protected PDOException|bool $fail = false;
    protected string|null $message;
    public function data(): ?object
    {
        return $this->data;
    }

    public function __set(string $name, string $value): void
    {
        if (empty($this->data)) {
            $this->data = new \stdClass();
        }

        $this->data->$name = $value;
    }

    public function __get(string $name)
    {
       return $this->data->$name ?? null;
    }

    public function __isset(string $name): bool
    {
        return isset($this->data->name);
    }

    public function fail(): PDOException|bool
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

    protected function read(string $select, string|array $params = null): ?PDOStatement
    {
        try {
            $stmt = Connection::instanceConnect()->prepare($select);

            if ($params) {
                parse_str($params, $params);
                foreach ($params as $key => $value) {
                    $type = (is_numeric($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
                    $stmt->bindValue(":{$key}", $value, $type);
                }
            }

            $stmt->execute();
            return $stmt;
        } catch (PDOException $exception) {
            if ($this->fail) {
                throw $exception;
            }

            return null;
        }
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