<?php

namespace Src\GestionExample\User\Infrastructure\Repositories\Eloquent;

use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;
use Src\GestionExample\User\Domain\ValueObjects\{
    UserName,
    UserEmail,
    UserCity,
    UserId
};
use Src\GestionExample\User\Domain\User;
use App\Models\User as UserModel;

final class UserRepository implements UserRepositoryContract
{

    private $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function getAllUsers(): ?array
    {
        $responseArrayFormat = [];
        $users = $this->model->get();
        foreach ($users as $user) {
            array_push($responseArrayFormat, [
                "name" => (new UserName($user->name))->value(),
                "email" => (new UserEmail($user->email))->value(),
                "city" => (new UserCity($user->city))->value(),
                "type_repository" => "CON ELOQUENT"
            ]);
        }
        return $responseArrayFormat;
    }

    public function getUser(int $id): ?User
    { 
        $userId = new UserId($id);
        $user = $this->model->find($userId->value());
        return new User(
            new UserName($user->name),
            new UserEmail($user->email),
            new UserCity($user->city),
            'CON ELOQUENT'
        );
    }
}