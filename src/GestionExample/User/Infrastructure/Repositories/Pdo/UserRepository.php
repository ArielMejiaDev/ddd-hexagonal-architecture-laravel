<?php

namespace Src\GestionExample\User\Infrastructure\Repositories\Pdo;

use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;
use Src\GestionExample\User\Domain\ValueObjects\{
    UserName,
    UserEmail,
    UserCity
};
use Src\GestionExample\User\Domain\User;
use Illuminate\Support\Facades\DB;

final class UserRepository implements UserRepositoryContract
{
    public function getUser(int $id): ?User
    {
        $pdo = DB::getPdo();
        $query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        $user = $query->fetch(\PDO::FETCH_OBJ);
        return new User(
            new UserName($user->name),
            new UserEmail($user->email),
            new UserCity($user->city),
            'CON PDO'
        );
    }
}