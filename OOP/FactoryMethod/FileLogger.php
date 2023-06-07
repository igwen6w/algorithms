<?php

class FileLogger implements LogInterface
{
    private string $file_path;
    public function __construct(string $file_path)
    {
        if (file_exists($file_path)) {
            $this->file_path = $file_path;
        }
    }
    public function log($message)
    {
        file_put_contents($this->file_path, $message.PHP_EOL, FILE_APPEND);
    }

}