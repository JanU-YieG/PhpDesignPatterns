<?php


namespace BuilderPattern\BuilderSpecific;


use BuilderPattern\BuilderInterface\BuilderInterface;
use BuilderPattern\ProductBase\Vehicle;
use BuilderPattern\ProductSpecific\Car;
use BuilderPattern\SpareParts\Door;
use BuilderPattern\SpareParts\Engine;
use BuilderPattern\SpareParts\Wheel;

class CarBuilder implements BuilderInterface
{

    private $car;
    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->car=new Car();

    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->car->setPart('wheel1',new Wheel());
        $this->car->setPart('wheel2',new Wheel());
        $this->car->setPart('wheel3',new Wheel());
        $this->car->setPart('wheel4',new Wheel());

    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->car->setPart('carEngin',new Engine());
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.\
        $this->car->setPart('rightDoor',new Door());
        $this->car->setPart('leftDoor',new Door());
        $this->car->setPart('topDoor',new Door());
    }

    public function getVehicle(): Vehicle
    {
        // TODO: Implement getVehicle() method.
        return $this->car;
    }
}