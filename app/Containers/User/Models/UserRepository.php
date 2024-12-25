<?php

namespace App\Containers\User\Models;

final readonly class UserRepository
{

    public function save(User $user): User
    {
        $user->save();
        return $user;
    }
}
