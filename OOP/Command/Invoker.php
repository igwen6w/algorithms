<?php

class Invoker
{
    private CommandInterface $command;

    public function setCommand($command)
    {
        $this->command = $command;
    }

    public function run()
    {
        return $this->command->execute();
    }

}