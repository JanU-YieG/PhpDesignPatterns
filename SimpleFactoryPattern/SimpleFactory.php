<?php

namespace SimpleFactoryPattern;

use Couchbase\N1qlIndex;

class SimpleFactory
{
    public function createBicycle():Bicycle
    {
        return new Bicycle();
    }
}