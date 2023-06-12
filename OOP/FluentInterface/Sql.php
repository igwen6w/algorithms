<?php

class Sql
{
    protected array $select;
    protected string $table;
    protected string $where;

    public function from(string $table)
    {
        $this->table = $table;
        return $this;
    }

    public function where(string $where)
    {
        $this->where = $where;
        return $this;
    }

    public function select(array $fields)
    {
        $this->select = $fields;
        return $this;
    }

    public function __toString()
    {
        return sprintf(
            'select %s from %s where %s',
            join(',', $this->select),
            $this->table,
            $this->where
        );
    }
}