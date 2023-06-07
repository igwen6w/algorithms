<?php

class BikeBuilder implements BuilderInterface
{
    private Bike $bike;

    /**
     * @inheritDoc
     */
    public function createVehicle()
    {
        $this->bike = new Bike();
    }

    public function addDoor()
    {
    }

    public function addWheel()
    {
        // 前轮
        $this->bike->setPart('front_wheel', new \Parts\Wheel());
        // 后轮
        $this->bike->setPart('rear_wheel', new \Parts\Wheel());
    }

    public function addEngine()
    {
    }

    public function getVehicle(): \Parts\Vehicle
    {
        return $this->bike;
    }
}