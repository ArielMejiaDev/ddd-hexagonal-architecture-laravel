<?php

declare(sctrict_types=1);

namespace Src\GestionExample\User\Infrastructure;

final class GetAllUsersController
{
    public function __invoke(): string
    {
        return "hola mundo desde infraestructura";
    }
}