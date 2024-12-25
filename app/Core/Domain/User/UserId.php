<?php

namespace App\Core\Domain\User;

use App\Common\Domain\ValueObject;

class UserId extends ValueObject
{
    public function __construct(private string $id)
    {
    }

    public function jsonSerialize(): array
    {
        return [];
    }

    public function getId(): string
    {
        return $this->id;
    }
}
