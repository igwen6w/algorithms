<?php

namespace Observer;

use AllowDynamicProperties;
use SplObserver;

#[AllowDynamicProperties] class User implements \SplSubject
{
    public function __construct()
    {
        $this->observer = new \SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void
    {
        $this->observer->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void
    {
        $this->observer->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify(): void
    {
        foreach ($this->observer as $item) {
            $item->update($this);
        }
    }

    public function sayHello(): void
    {
        $this->say = 'hello';
        $this->notify();
    }
}