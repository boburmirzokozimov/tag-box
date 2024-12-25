<?php

namespace App\Core\Application\Command\StoreUser;


use App\Common\Application\Command\CommandHandlerInterface;
use App\Common\Application\Command\CommandInterface;
use App\Core\Application\Helpers\IdGenerator;
use App\Core\Domain\User\Exceptions\UserEmailAlreadyExists;
use App\Core\Domain\User\User;
use App\Core\Domain\User\UserEmailUniqueCheckerInterface;
use App\Core\Domain\User\UserId;
use App\Core\Domain\User\UserRepositoryInterface;

readonly class StoreUserCommandHandler implements CommandHandlerInterface
{
    public function __construct(
        private UserEmailUniqueCheckerInterface $emailChecker,
        private UserRepositoryInterface         $repository)
    {
    }

    /**
     * @param StoreUserCommand $command
     * @throws UserEmailAlreadyExists
     */
    public function handle(CommandInterface $command): void
    {
        if (!$this->emailChecker->isUnique($command->getEmail())) {
            throw new UserEmailAlreadyExists("Email \"{$command->getEmail()}\" already exists");
        }

        $id = IdGenerator::generate();

        $user = User::new(
            new UserId($id),
            $command->getName(),
            $command->getEmail(),
            $command->getPassword()
        );

        $this->repository->save($user);
    }
}
