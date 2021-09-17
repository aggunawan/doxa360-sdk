<?php

namespace Aggunawan\Doxa360\Object;

class Transaction
{
    protected ?int $id;
    protected ?string $code;
    protected ?string $product_name;
    protected ?int $product_price;
    protected ?int $quantity;
    protected ?int $tax;
    protected ?int $sub_total;
    protected ?int $total;
    protected ?string $signed_by_name;
    protected ?string $signed_by_email;
    protected ?int $member_id;
    protected ?int $recorded_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Transaction
    {
        $this->id = $id;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): Transaction
    {
        $this->code = $code;
        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(?string $product_name): Transaction
    {
        $this->product_name = $product_name;
        return $this;
    }

    public function getProductPrice(): ?int
    {
        return $this->product_price;
    }

    public function setProductPrice(?int $product_price): Transaction
    {
        $this->product_price = $product_price;
        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): Transaction
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getTax(): ?int
    {
        return $this->tax;
    }

    public function setTax(?int $tax): Transaction
    {
        $this->tax = $tax;
        return $this;
    }

    public function getSubTotal(): ?int
    {
        return $this->sub_total;
    }

    public function setSubTotal(?int $sub_total): Transaction
    {
        $this->sub_total = $sub_total;
        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): Transaction
    {
        $this->total = $total;
        return $this;
    }

    public function getSignedByName(): ?string
    {
        return $this->signed_by_name;
    }

    public function setSignedByName(?string $signed_by_name): Transaction
    {
        $this->signed_by_name = $signed_by_name;
        return $this;
    }

    public function getSignedByEmail(): ?string
    {
        return $this->signed_by_email;
    }

    public function setSignedByEmail(?string $signed_by_email): Transaction
    {
        $this->signed_by_email = $signed_by_email;
        return $this;
    }

    public function getMemberId(): ?int
    {
        return $this->member_id;
    }

    public function setMemberId(?int $member_id): Transaction
    {
        $this->member_id = $member_id;
        return $this;
    }

    public function getRecordedAt(): ?int
    {
        return $this->recorded_at;
    }

    public function setRecordedAt(?int $recorded_at): Transaction
    {
        $this->recorded_at = $recorded_at;
        return $this;
    }
}