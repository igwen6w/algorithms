<?php

/**
 * Log 接口
 * 可以是 File 也可以是 Stdout
 */
interface LogInterface
{
    public function log($message);
}