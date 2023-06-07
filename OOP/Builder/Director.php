<?php

class Director
{
    public function build(BuilderInterface $builder): \Parts\Vehicle
    {
        $builder->createVehicle();
        $builder->addDoor();
        $builder->addWheel();
        $builder->addEngine();
        return $builder->getVehicle();
    }

}