<?php

class SimpleFactory
{
    public function createByd()
    {
        return new Car('byd');
    }

}