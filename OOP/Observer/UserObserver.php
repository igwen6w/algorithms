<?php

namespace Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    /**
     * @var array<SplSubject>
     */
    protected array $updated_users;

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        $this->updated_users[] = $subject;
    }

    public function getUpdatedUsers(): array
    {
        return $this->updated_users;
    }
}