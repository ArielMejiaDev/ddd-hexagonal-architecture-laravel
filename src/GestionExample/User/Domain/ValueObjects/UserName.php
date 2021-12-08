<?php

namespace Src\GestionExample\User\Domain\ValueObjects;

final class UserName
{
    private $userName;

    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

    public function value(): string
    {
        return $this->userName;
    }
}