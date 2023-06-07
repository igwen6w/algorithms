<?php

/**
 * Logger 工厂
 * 可以造 fileLogger 也可以造 StdLogger
 * 将来如果还有VideoLogger等
 * 只需要实现它即可
 * 每个工厂只造一种 Logger
 */
interface LoggerFactory
{
    public function createLogger(): LogInterface;
}