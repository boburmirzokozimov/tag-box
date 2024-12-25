<?php

namespace App\Core\Application\Checkers;

use App\Core\Domain\User\UserEmailUniqueCheckerInterface;
use DB;

class UserEmailUniqueChecker implements UserEmailUniqueCheckerInterface
{
    public function isUnique(string $email): bool
    {
        return DB::table("users")->where("email", $email)->exists();
    }
}
