<?php

interface HandlerInterface
{
    public function handle($task);

    public function processing($task);

}