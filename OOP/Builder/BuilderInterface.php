<?php

interface BuilderInterface
{
    /**
     * 造车
     *
     */
    public function createVehicle();

    public function addDoor();

    public function addWheel();

    public function addEngine();

    public function getVehicle(): \Parts\Vehicle;

}