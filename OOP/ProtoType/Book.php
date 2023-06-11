<?php

class Book extends AbstractBook
{
    protected string $type = 'paper';

    public function __construct()
    {
        // 连接数据库
        // 查询数据库
        // 读取记录，超过1000000行
    }

    public function __clone()
    {
        $this->clone_times+=1;
    }
}