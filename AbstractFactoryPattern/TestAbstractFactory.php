<?php


namespace AbstractFactoryPattern;


use BaseClass\BaseClass;

class TestAbstractFactory extends BaseClass
{
    public function testCanCreateDigitalProduct()
    {
        $factory=new ProductFactory();
        $product=$factory->createDigitalProduct(150);
        $this->assertInstanceOf(Product::class,$product);
        echo $product->calculatePrice();
        $this->dd($product);
    }

    public function testCanCreateShippableProduct()
    {
        $factory=new ProductFactory();
        $product=$factory->createShippableProduct(150);
//        return $product;
        $this->dd($product);
    }
}