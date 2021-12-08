<?php

declare(sctrict_types=1);

namespace Src\GestionExample\User\Infrastructure;

use Src\GestionExample\User\Application\GetUserByCriteriaUseCase;

final class GetUserByCriteriaController
{

    private $getUserByCriteriaUseCase;

    public function __construct(GetUserByCriteriaUseCase $getUserByCriteriaUseCase)
    {
        $this->getUserByCriteriaUseCase = $getUserByCriteriaUseCase;
    }

    public function __invoke()
    {
        return $this->getUserByCriteriaUseCase->__invoke();
    }
}