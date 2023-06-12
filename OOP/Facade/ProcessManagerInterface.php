<?php

interface ProcessManagerInterface
{
    public function start();
    public function record();
    public function end();
}