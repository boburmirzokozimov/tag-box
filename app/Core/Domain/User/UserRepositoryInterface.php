<?php

namespace App\Core\Domain\User;

interface UserRepositoryInterface
{
    public function save(User $user): void;
}
