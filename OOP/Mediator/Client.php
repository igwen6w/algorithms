<?php

class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output($content)
    {
        echo $content;
    }

}