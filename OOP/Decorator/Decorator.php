<?php

abstract class Decorator implements RendererInterface
{
    protected $wrapped;

    public function __construct(RendererInterface $render)
    {
        $this->wrapped = $render;
    }

}