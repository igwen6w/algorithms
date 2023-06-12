<?php

class SingleValidator extends ValidationHandler
{
    public function processing($task): bool
    {
        return count($task) === 1;
    }


}