<?php

namespace Aggunawan\Doxa360\Object;

class Member
{
    protected int $id;

    protected string $name;

    protected string $email;

    protected string $phone;

    protected int $statusCode;

    protected int $statusLabel;

    protected int $registeredAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Member
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Member
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): Member
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): Member
    {
        $this->phone = $phone;
        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): Member
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getStatusLabel(): int
    {
        return $this->statusLabel;
    }

    public function setStatusLabel(int $statusLabel): Member
    {
        $this->statusLabel = $statusLabel;
        return $this;
    }

    public function getRegisteredAt(): int
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(int $registeredAt): Member
    {
        $this->registeredAt = $registeredAt;
        return $this;
    }
}