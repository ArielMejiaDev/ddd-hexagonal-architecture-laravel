<?php

namespace Src\GestionExample\User\Infrastructure\Repositories\Eloquent;

use Src\GestionExample\User\Domain\Contracts\UserRepositoryContract;
use Src\GestionExample\User\Domain\ValueObjects\{
    UserName,
    UserEmail,
    UserCity
};
use Src\GestionExample\User\Domain\User;
use App\Models\User as UserModel;

final class UserRepository implements UserRepositoryContract
{
    public function getUserByCriteria(): ?array
    {   
        //dd(UserModel::all());
        //$user = UserModel::all();
        $user = \Illuminate\Support\Facades\DB::table('example')->get();
        return [$user->toArray(), "Con eloquent"];
        //return $user->toArray();
    }
}