<?php

class FTTRoom implements GameRoomInterface
{
    public function __construct(ProcessManagerInterface $process)
    {
        $this->process = $process;
    }

    public function open()
    {
        $this->process->start();
        $this->process->record();
    }

    public function close()
    {
        $this->process->end();
    }
}