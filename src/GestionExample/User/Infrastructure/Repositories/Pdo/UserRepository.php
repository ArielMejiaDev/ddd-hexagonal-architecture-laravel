<?php

namespace Src\GestionExample\User\Infrastructure\Repositories\Pdo;

use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;
use Src\GestionExample\User\Domain\ValueObjects\{
    UserName,
    UserEmail,
    UserCity,
    UserId
};
use Src\GestionExample\User\Domain\User;
use Illuminate\Support\Facades\DB;

final class UserRepository implements UserRepositoryContract
{

    public function getAllUsers(): ?array
    {
        $responseArrayFormat = [];
        $pdo = DB::getPdo();
        $query = $pdo->prepare("SELECT * FROM users");
        $query->execute();
        $users = $query->fetchAll();
        foreach ($users as $user) {
            array_push($responseArrayFormat, [
                "name" => (new UserName($user['name']))->value(),
                "email" => (new UserEmail($user['email']))->value(),
                "city" => (new UserCity($user['city']))->value(),
                "type_repository" => "CON PDO"
            ]);
        }
        return $responseArrayFormat;
    }

    public function getUser(int $id): ?User
    {
        $pdo = DB::getPdo();
        $idUser = (new UserId($id))->value();
        $query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam(':id', $idUser);
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