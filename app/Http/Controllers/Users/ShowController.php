<?php

declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\GestionExample\User\Infrastructure\GetUserController;

final class ShowController extends Controller
{
    private $controller;

    public function __construct(GetUserController $getAllUsersController)
    {
        $this->controller = $getAllUsersController;
    }

    public function __invoke(Request $request, int $id)
    {
        $user = $this->controller->__invoke($request, $id);
        return response()->json([
            $user->name()->value(),
            $user->email()->value(),
            $user->city()->value()
        ]);
    }
}