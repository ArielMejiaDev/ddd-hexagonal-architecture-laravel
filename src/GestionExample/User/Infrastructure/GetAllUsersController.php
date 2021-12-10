<?php

declare(sctrict_types=1);

namespace Src\GestionExample\User\Infrastructure;
use Src\GestionExample\User\Application\GetAllUsersUseCase;
use Illuminate\Http\Request;

final class GetAllUsersController
{
    private $getAllUsers;

    public function __construct(GetAllUsersUseCase $getAllUsers)
    {
        $this->getAllUsers = $getAllUsers;
    }

    public function __invoke(): ?array
    {
        return $this->getAllUsers->__invoke();
    }
}