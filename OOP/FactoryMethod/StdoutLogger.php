<?php

class StdoutLogger implements LogInterface
{
    public function log($message)
    {
        echo $message;
    }
}