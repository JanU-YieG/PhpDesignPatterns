<?php


namespace PrototypePattern;


class BarBookPrototype extends BookPrototype
{
    protected $category='Bar';

    public function __clone()
    {
        
    }
}