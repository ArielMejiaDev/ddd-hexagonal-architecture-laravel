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
    public function getUser(int $id): ?User
    { 
        $userId = new UserId($id);
        $user = UserModel::find($userId->value());
        return new User(
            new UserName($user->name),
            new UserEmail($user->email),
            new UserCity($user->city),
        );
    }
}