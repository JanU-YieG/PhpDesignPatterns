<?php

namespace SimpleFactoryPattern;

class Bicycle
{
    public function driveTo(string $destination)
    {
        echo $destination;
    }
}