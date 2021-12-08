<?php

namespace Src\GestionExample\User\Domain\ValueObjects;

final class UserCity
{
    private $userCity;

    public function __construct(string $userCity)
    {
        $this->userCity = $userCity;
    }

    public function value(): string
    {
        return $this->userCity;
    }
}