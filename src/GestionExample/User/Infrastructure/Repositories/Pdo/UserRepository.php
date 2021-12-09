<?php

namespace Src\GestionExample\User\Infrastructure\Repositories\Pdo;

use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;
use Src\GestionExample\User\Domain\ValueObjects\{
    UserName,
    UserEmail,
    UserCity
};
use Src\GestionExample\User\Domain\User;

final class UserRepository implements UserRepositoryContract
{
    public function getUserByCriteria(): ?array
    {
        $pdo = \Illuminate\Support\Facades\DB::getPdo();
        $query = $pdo->prepare("SELECT * FROM example");
        $query->execute();
        $users=$query->fetchAll(\PDO::FETCH_OBJ);
        return [$users, "Con PDO"];
    }
}