<?php

namespace App\Model;

class UserModel extends Model
{
    protected static array $safe = ["id", "created_at", "updated_at"];
    protected static string $entity = "users";

    public function bootstrap(string $firstName, string $lastName, string $email, string $document = null): ?UserModel
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
        $this->email = $email;
        $this->document = $document;
        return $this;
    }

    public function load(int $id, string $columns = "*")
    {
        $load = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE id = :id", "id={$id}");
        if ($this->fail() || !$load->rowCount()) {
            return $this->message = "Usuário não encontrado para o id informado";
        }
        return $load->fetchObject();
    }

    public function find(string $email, string $columns = "*")
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE email = :email",
            "email={$email}");
        if ($this->fail() || !$find->rowCount()) {
            $this->message = "Usuário não encontrado para o email informado";
            return null;
        }
        return $find->fetchObject();
    }

    public function all(int $limit = 30, int $offset = 0, string $columns = "*")
    {
        $all = $this->read("SELECT {$columns} FROM " . self::$entity . " LIMIT :l OFFSET :o",
            "l={$limit}&o={$offset}");

        if ($this->fail() || !$all->rowCount()) {
            $this->message = "Sua consulta não retornou usuários";
            return null;
        }
        return $all->fetchAll(\PDO::FETCH_CLASS);
    }

    public function save(): ?UserModel
    {
        if (!$this->required()) {
            return null;
        }

        if (!empty($this->id)) {
            $userId = $this->id;
            $email = $this
                ->read("SELECT * FROM users WHERE email = :e AND id != :id",
                    "email={$this->email}&id={$userId}"
                );

            if ($email->rowCount()) {
                $this->message = "Usuario já cadastrado";
            }

            $this->update(self::$entity, $this->safe(), "id = :id", "id={$userId}");
            if ($this->fail()) {
                $this->message = "Erro ao atualizar";
            }
            $this->message = "Cadastrado atualizado com sucesso";
        }

        if (empty($this->id)) {
            if ($this->find($this->email)) {
                $this->message = "O email já esta cadastrado";
                return null;
            }

            $userId = $this->create(self::$entity, $this->safe());
            if ($this->fail()) {
                $this->message = "Erro ao cadastrar";
            }

            $this->message = "Cadastrado realizado com sucesso";
        }

        $this->data = $this->read("SELECT * FROM users WHERE id = :id", "id={$userId}");
        return $this;
    }

    public function destroy()
    {

    }

    private function required(): bool
    {
        if (empty($this->first_name) || empty($this->last_name) || empty($this->email)) {
            $this->message = "Nome, sobrenome e e-mail são obrigatórios";
            return false;
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->message = "O e-mail informado não parece válido";
            return false;
        }

        return true;
    }
}