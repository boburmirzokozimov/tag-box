<?php

namespace App\Common\Domain;


interface QueryInterface
{
    public function handle(): mixed;
}
