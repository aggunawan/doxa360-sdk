<?php

namespace Aggunawan\Doxa360\Object;

class Integration
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected string $thumbnail;
    protected bool $is_finished;
    protected string $slug;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Integration
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Integration
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Integration
    {
        $this->description = $description;
        return $this;
    }

    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): Integration
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    public function getIsFinished(): bool
    {
        return $this->is_finished;
    }

    public function setIsFinished(bool $is_finished): Integration
    {
        $this->is_finished = $is_finished;
        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): Integration
    {
        $this->slug = $slug;
        return $this;
    }
}