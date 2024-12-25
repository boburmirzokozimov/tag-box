<?php

namespace App\Core\Domain\User;

use App\Common\Domain\Entity;

class User extends Entity
{
    private function __construct(
        private readonly UserId $id,
        private readonly string $name,
        private readonly string $email,
        private readonly string $password,
        private readonly string $status,
    )
    {
    }

    public static function new(
        UserId $id,
        string $email,
        string $name,
        string $password
    ): self
    {
        return new self($id, $name, $email, $password, 'new');
    }

    public function toArray(): array
    {
        return [];
    }

    public function getId(): string
    {
        return $this->id->getId();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

}
