<?php

class Mediator implements MediatorInterface
{
    protected Database $database;
    protected Server $server;
    protected Client $client;

    public function __construct($database, $server, $client)
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->client->setMediator($this);
        $this->database->setMediator($this);
        $this->server->setMediator($this);
    }


    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb()
    {
        return $this->database->getData();
    }
}