<?php

namespace Src\GestionExample\User\Infrastructure\Repositories\Eloquent;

use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;
use Src\GestionExample\User\Domain\ValueObjects\{
    UserName,
    UserEmail,
    UserCity
};
use Src\GestionExample\User\Domain\User;

final class UserRepository implements UserRepositoryContract
{
    public function getAll()
    {
        
    }
}