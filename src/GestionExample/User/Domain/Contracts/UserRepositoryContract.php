<?php

namespace Src\GestionExample\User\Domain\Contracts;
use Src\GestionExample\User\Domain\User;

interface UserRepositoryContract
{
    public function getUser(int $id): ?User;
}