<?php

namespace Aggunawan\Doxa360\Object;

class Member
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?string $phone = null;
    protected int $statusCode = 1;
    protected ?int $registeredAt = null;
    protected ?string $statusLabel = null;
    protected ?int $typeCode = null;
    protected ?string $typeLabel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): Member
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): Member
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): Member
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): Member
    {
        $this->phone = $phone;
        return $this;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): Member
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getRegisteredAt(): ?int
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(int $registeredAt): Member
    {
        $this->registeredAt = $registeredAt;
        return $this;
    }

    public function setStatusLabel(string $statusLabel): Member
    {
        $this->statusLabel = $statusLabel;
        return $this;
    }

    public function setTypeCode(int $type): Member
    {
        $this->typeCode = $type;
        return $this;
    }

    public function setTypeLabel(string $typeLabel): Member
    {
        $this->typeLabel = $typeLabel;
        return $this;
    }
}