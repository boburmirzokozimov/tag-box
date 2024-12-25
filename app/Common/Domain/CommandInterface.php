<?php

namespace App\Common\Domain;


interface CommandInterface
{
    public function execute(): void;
}
