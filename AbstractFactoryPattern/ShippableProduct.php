<?php


namespace AbstractFactoryPattern;


class ShippableProduct implements Product
{
    private $productPrice;
    private $shippingCosts;

    public function __construct(int $productPrice,int $shippingCosts)
    {
        $this->productPrice=$productPrice;
        $this->shippingCosts=$shippingCosts;
    }

    public function calculatePrice(): int
    {
        // TODO: Implement calculatePrice() method.
        return $this->shippingCosts+$this->productPrice;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }
}