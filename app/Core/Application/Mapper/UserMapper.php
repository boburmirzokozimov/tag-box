<?php

namespace App\Core\Application\Mapper;


use App\Core\Domain\User\User;
use App\Core\Infrastructure\EloquentModels\UserEloquentModel;

class UserMapper
{
    public static function toEloquent(User $user): UserEloquentModel
    {
        $userEloquent = new UserEloquentModel();
        $userEloquent->id = $user->getId();
        $userEloquent->name = $user->getName();
        $userEloquent->email = $user->getEmail();
        $userEloquent->password = $user->getPassword();
        return $userEloquent;
    }
}
