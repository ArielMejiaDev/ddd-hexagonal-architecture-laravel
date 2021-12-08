<?php

namespace Src\GestionExample\User\Domain\ValueObjects;

final class UserEmail
{
    private $userEmail;

    public function __construct(string $userEmail)
    {
        $this->userEmail = $userEmail;
    }

    public function value(): string
    {
        return $this->userEmail;
    }
}