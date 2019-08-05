<?php


namespace BuilderPattern;


use BuilderPattern\BuilderInterface\BuilderInterface;
use BuilderPattern\ProductBase\Vehicle;

class Director
{
    public function biuld(BuilderInterface $builder):Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addWheel();
        $builder->addEngine();
        return $builder->getVehicle();
    }
}