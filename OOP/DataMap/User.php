<?php

class User
{
    public string $name;
    public string $email;

     public function __construct(array $data)
     {
         $this->name = $data['name'];
         $this->email = $data['email'];
     }

}