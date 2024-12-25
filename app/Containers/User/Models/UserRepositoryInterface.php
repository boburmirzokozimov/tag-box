<?php

namespace App\Containers\User\Models;

interface UserRepositoryInterface
{
    public function save(User $user): User;
}
