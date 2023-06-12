<?php

class Database
{
    public PDO $connection;
    public string $where;

    public function __construct()
    {
        // 建立书数据库连接
    }
    public function where(string $where)
    {
        $this->where = $where;
        return $this;
    }

    public function query()
    {
        return $this->connection->query($this->where);
    }

}