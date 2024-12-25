<?php

namespace App\Core\Infrastructure\Repositories;

use App\Core\Application\Mapper\UserMapper;
use App\Core\Domain\User\User;
use App\Core\Domain\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function save(User $user): void
    {
        $userEloquent = UserMapper::toEloquent($user);
        $userEloquent->save();
    }
}
