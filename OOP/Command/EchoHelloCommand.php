<?php

class EchoHelloCommand implements CommandInterface
{
    private Receiver $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->write('Hello');
    }
}