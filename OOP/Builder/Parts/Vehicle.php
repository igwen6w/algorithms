<?php

namespace Parts;

abstract class Vehicle
{
    final public function setPart(string $key, Object $value): void
    {
        $this->{$key} = $value;
    }
}