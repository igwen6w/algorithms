<?php
/**
 * 对象池和工厂模式的结合
 */

class FlyweightFactory
{
    protected array $pool;

    public function get($name)
    {
        if (! isset($this->pool[$name])) {
            $this->pool[$name] = new Tool();
        }
        return $this->pool[$name];
    }

}