<?php


namespace BuilderPattern;


use BuilderPattern\BuilderSpecific\CarBuilder;
use BuilderPattern\BuilderSpecific\TruckBuilder;

class TestBuilderPattern
{
    public function testBuildTruck()
    {
        $truckBuilder=new TruckBuilder();
        $newVehicle=(new Director())->biuld($truckBuilder);

        return $newVehicle->getParts();
    }

    public function testBuilderCar()
    {
        $carBuilder=new CarBuilder();
        $newVehicle=(new Director())->biuld($carBuilder);

        return $newVehicle->getParts();
    }
}