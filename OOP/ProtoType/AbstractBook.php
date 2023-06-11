<?php

/**
 * 某些场景下克隆一个对象比新建一个对象更节省资源
 * 例如某个数据库对象已经保存了1000000条查询记录
 * 如果现在需要一个新的对象也要有1000000条查询记录
 * 直接克隆会省去初始化数据库连接和查询的过程
 * 这个情况下，直接克隆会更节省资源
 */
abstract class AbstractBook
{
    protected string $name;

    protected int $clone_times = 0;

    protected string $type;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}