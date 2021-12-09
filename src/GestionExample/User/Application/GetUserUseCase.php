<?php

declare(sctrict_types=1);

namespace Src\GestionExample\User\Application;
use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;
use Src\GestionExample\User\Domain\User;

final class GetUserUseCase
{
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $id): User
    {
        return $this->repository->getUser($id);
    }
}