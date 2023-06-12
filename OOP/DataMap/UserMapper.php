<?php

class UserMapper
{
    private Database $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function find($id)
    {
        $statement = $this->db->where("id = $id")->query();
        $this->mapToUser($statement->fetch(PDO::FETCH_ASSOC));
    }

    public function mapToUser($statement)
    {
        return new User($statement);
    }

}