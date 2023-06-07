<?php

class CarBuilder implements BuilderInterface
{
    private Car $car;

    /**
     * @inheritDoc
     */
    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addDoor()
    {
        // 左门
        $this->car->setPart('left_door', new \Parts\Door());
        // 右门
        $this->car->setPart('right_door', new \Parts\Door());
        // 后备箱
        $this->car->setPart('trunk_lid', new \Parts\Door());
    }

    public function addWheel()
    {
        $this->car->setPart('left_front_wheel', new \Parts\Wheel());
        $this->car->setPart('right_front_wheel', new \Parts\Wheel());
        $this->car->setPart('left_rear_wheel', new \Parts\Wheel());
        $this->car->setPart('right_rear_wheel', new \Parts\Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('v8', new \Parts\Engine());
    }

    public function getVehicle(): \Parts\Vehicle
    {
        return $this->car;
    }
}