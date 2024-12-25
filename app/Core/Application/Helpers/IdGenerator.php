<?php

namespace App\Core\Application\Helpers;

use App\Common\Application\Helpers\IDGeneratorInterface;
use Illuminate\Support\Str;

final class IdGenerator implements IdGeneratorInterface
{
    public static function generate(): string
    {
        return Str::orderedUuid()->toString();
    }
}
