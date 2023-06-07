<?php

class SomeWorker
{
    private string $created_at;

    public function __construct()
    {
        $this->created_at = time();
    }

    public function do(): void
    {
        // do some thing
    }

}