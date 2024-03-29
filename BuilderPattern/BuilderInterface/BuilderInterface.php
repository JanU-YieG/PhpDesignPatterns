<?php


namespace BuilderPattern\BuilderInterface;


use BuilderPattern\ProductBase\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle() : Vehicle;
}