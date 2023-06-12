<?php
class WebService implements RendererInterface
{
    protected string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }

}