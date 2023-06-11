<?php

class WebService extends AbstractService
{

    public function get(string $text)
    {
        return $this->printer->format($text);
    }
}