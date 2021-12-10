<?php

declare(sctrict_types=1);

namespace Src\GestionExample\User\Application;
use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;

final class GetAllUsersUseCase
{
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): ?array
    {
        return $this->repository->getAllUsers();
    }
}