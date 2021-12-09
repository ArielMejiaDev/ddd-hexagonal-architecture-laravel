<?php

namespace Src\GestionExample\User\Domain\ValueObjects;

final class UserId
{
    private $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function value(): int
    {
        return $this->userId;
    }
}