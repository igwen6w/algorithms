<?php

class Receiver
{
    private array $out;

    public function write(string $string)
    {
        $this->out[] = $string;
    }

    public function stdOut()
    {
        return join(',', $this->out);
    }

}