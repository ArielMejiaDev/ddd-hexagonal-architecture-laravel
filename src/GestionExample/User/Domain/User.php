<?php

namespace Src\GestionExample\User\Domain;

use Src\GestionExample\User\Domain\ValueObjects\{
    UserCity,
    UserEmail,
    UserName
};

final class User
{
    private $name;
    private $email;
    private $city;

    public function __construct(
        ?UserName $name,
        ?UserEmail $email,
        ?UserCity $city
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->city = $city;
    }

    public static function create(
        UserName $name,
        UserEmail $email,
        UserCity $city
    )
    {
        $user = new self($name, $email, $city);
        return $user;
    }
}