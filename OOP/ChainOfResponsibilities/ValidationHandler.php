<?php

abstract class ValidationHandler implements HandlerInterface
{
    private ValidationHandler $next;

    public function __construct(ValidationHandler $next)
    {
        $this->next = $next;
    }

    public function handle($task): bool
    {
        return $this->processing($task) ?? $this->next->processing($task);
    }

    abstract public function processing($task);
}