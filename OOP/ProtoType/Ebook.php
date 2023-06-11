<?php

class Ebook extends AbstractBook
{
    protected string $type = 'digit';

    public function __construct()
    {
        // 连接数据库
        // 查询数据库
        // 读取记录，超过1000000行
    }

    public function __clone()
    {
        $this->clone_times++;
    }
}