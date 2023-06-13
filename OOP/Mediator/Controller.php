<?php

class Controller
{
    public function index()
    {
        $client = new Client();
        $database = new Database();
        $server = new Server();
        $mediator = new Mediator($database, $server, $client);
        $client->setMediator($mediator);
        // 将会输出 string(4) data
        $client->request();
    }

}