<?php

class WorkerPool implements Countable
{
    private array $occupiedWorkers;
    private array $freeWorkers;

    /**
     * 捕获
     *
     * @return SomeWorker
     */
    public function get(): SomeWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new SomeWorker();
            $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        return $worker;
    }

    /**
     * 释放
     *
     * @param SomeWorker $worker
     * @return void
     */
    public function dispose(SomeWorker $worker): void
    {
        $hash_id = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$hash_id])) {
            unset($this->occupiedWorkers[$hash_id]);
            $this->freeWorkers[$hash_id] = $worker;
        }
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->freeWorkers) + count($this->occupiedWorkers);
    }


}