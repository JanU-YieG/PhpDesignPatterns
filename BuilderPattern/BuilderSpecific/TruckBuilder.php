<?php


namespace BuilderPattern\BuilderSpecific;


use BuilderPattern\BuilderInterface\BuilderInterface;
use BuilderPattern\ProductBase\Vehicle;
use BuilderPattern\ProductSpecific\Truck;
use BuilderPattern\SpareParts\Door;
use BuilderPattern\SpareParts\Engine;
use BuilderPattern\SpareParts\Wheel;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function addDoors()
    {
        $this->truck->setPart('rightDoor',new Door());
        $this->truck->setPart('leftDoor',new Door());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1',new Wheel());
        $this->truck->setPart('wheel2',new Wheel());
        $this->truck->setPart('wheel3',new Wheel());
        $this->truck->setPart('wheel4',new Wheel());
        $this->truck->setPart('wheel5',new Wheel());
        $this->truck->setPart('wheel6',new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngin',new Engine());
    }

    public function createVehicle()
    {
        $this->truck=new Truck();
    }

    public function getVehicle(): Vehicle
    {
        // TODO: Implement getVehicle() method.
        return $this->truck;
    }
}