<?php

namespace App\Common\Domain;

use JsonSerializable;

abstract class AggregateRoot implements JsonSerializable
{

    /**
     * @return array<string, mixed>
     */
    abstract public function toArray(): array;

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
