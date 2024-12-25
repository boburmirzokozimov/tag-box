<?php

namespace App\Common\Domain\Exception;

use DomainException;

class EntityNotFoundException extends DomainException
{
    public function __construct(string $message = 'Entity not found')
    {
        parent::__construct($message);
    }
}
