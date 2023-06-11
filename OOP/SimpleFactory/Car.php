<?php

class Car
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function showName(): string
    {
        return $this->name;
    }

}