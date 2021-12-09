<?php

declare(sctrict_types=1);

namespace Src\GestionExample\User\Infrastructure;

use Illuminate\Http\Request;
use Src\GestionExample\User\Application\GetUserUseCase;

final class GetUserController
{
    private $getUser;

    public function __construct(GetUserUseCase $getUser)
    {
        $this->getUser = $getUser;
    }

    public function __invoke(Request $request, int $id)
    {
        return $this->getUser->__invoke($id);
    }
}