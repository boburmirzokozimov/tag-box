<?php

namespace App\Common\Application\Command;

interface CommandHandlerInterface
{
    public function handle(CommandInterface $command);
}
