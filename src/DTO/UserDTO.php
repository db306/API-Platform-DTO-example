<?php

declare(strict_types=1);

namespace App\DTO;

class UserDTO
{
    private string $id;
    private string $username;
    private string $account;

    public function __construct(
        string $id,
        string $username,
        string $account
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->account = $account;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getAccount(): string
    {
        return $this->account;
    }
}