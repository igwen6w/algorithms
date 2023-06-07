<?php

class FileLoggerFactory implements LoggerFactory
{
    private string $file_path;

    public function __construct(string $file_path)
    {
        $this->file_path = $file_path;
    }

    public function createLogger(): LogInterface
    {
        return new FileLogger($this->file_path);
    }
}