<?php

namespace App\Containers\User\Commands\CreateUser;

use App\Containers\User\Models\User;
use App\Containers\User\Models\UserRepository;
use Illuminate\Support\Facades\Hash;

final readonly class CreateUserCommand
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function execute(CreateUserDto $dto): User
    {
        $user = new User();
        $user->name = $dto->getName();
        $user->email = $dto->getEmail();
        $user->password = Hash::make($dto->getName());

        return $this->userRepository->save($user);
    }
}
