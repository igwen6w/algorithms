<?php

abstract class AbstractService
{
    public FormatterInterface $printer;

    public function __construct(FormatterInterface $printer)
    {
        $this->printer = $printer;
    }

    abstract public function get(string $text);

}