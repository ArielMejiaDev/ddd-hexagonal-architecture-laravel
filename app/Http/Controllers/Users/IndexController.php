<?php

declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\GestionExample\User\Infrastructure\GetUserByCriteriaController;

final class IndexController extends Controller
{
    private $controller;

    public function __construct(GetUserByCriteriaController $getAllUsersController)
    {
        $this->controller = $getAllUsersController;
    }

    public function __invoke(Request $request)
    {
        return response()->json($this->controller->__invoke($request));
    }
}