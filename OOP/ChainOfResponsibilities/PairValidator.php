<?php

class PairValidator extends ValidationHandler
{

    public function processing($task): bool
    {
        return count($task) === 2;
    }
}