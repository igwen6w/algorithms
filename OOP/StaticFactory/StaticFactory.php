<?php

class StaticFactory
{
    static public function format(string $type)
    {
        return match ($type) {
            'json' => new FormatJson(),
            'number' => new FormatNumber(),
            default => throw new Exception('not found')
        };

    }

}