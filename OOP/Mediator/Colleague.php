<?php

class Colleague
{
    protected MediatorInterface $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

}