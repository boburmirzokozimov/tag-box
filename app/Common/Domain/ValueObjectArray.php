<?php

namespace App\Common\Domain;

use ArrayIterator;
use JsonSerializable;

abstract class ValueObjectArray extends ArrayIterator implements JsonSerializable
{
    /**
     * @return array<string, mixed>
     */
    abstract public function jsonSerialize(): array;
}
