<?php

namespace App\Core\Domain\User;

interface UserEmailUniqueCheckerInterface
{
    public function isUnique(string $email): bool;
}
