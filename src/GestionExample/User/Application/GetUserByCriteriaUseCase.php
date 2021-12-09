<?php

namespace Src\GestionExample\User\Application;
use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;

final class GetUserByCriteriaUseCase
{

    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->getUserByCriteria();
    }
}