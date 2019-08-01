<?php


namespace AbstractFactoryPattern;


class DigitalProduct implements Product
{
    private $price;

    public function __construct(int $price)
    {
        $this->price=$price;
    }
    public function calculatePrice():int
    {
        return $this->price;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }
}