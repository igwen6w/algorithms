<?php
final class Multiton
{
    const INSTANCE_1 = 1;
    const INSTANCE_2 = 2;

    private static array $instances = [];

    private function __construct()
    {

    }

    public static function getInstance(string $instance_name)
    {
        if (!isset(self::$instances[$instance_name])) {
            self::$instances[$instance_name] = new self();
        }
        return self::$instances[$instance_name];
    }

    /**
     * 阻止实例被克隆
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * 阻止实例被反序列化
     *
     * @return void
     */
    private function __wakeup()
    {

    }
}
