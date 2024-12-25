<?php

namespace App\Core\Application\Command\StoreUser;

use App\Common\Application\Command\CommandInterface;

final class StoreUserCommand implements CommandInterface
{
    private function __construct(
        private readonly string $name,
        private readonly string $email,
        private readonly string $password,
    )
    {
    }

    public static function fromRequest(array $data): self
    {
        return new self($data['name'], $data['email'], $data['password']);
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
}
