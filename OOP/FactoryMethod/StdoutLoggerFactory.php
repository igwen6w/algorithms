<?php

class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger(): LogInterface
    {
        return new StdoutLogger();
    }
}