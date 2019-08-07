<?php


namespace SimpleFactoryPattern;


class TestSimpleFactoryPattern
{
    public function testCanCreateBicycle()
    {
        $simpleFactory=new SimpleFactory();
        $bicycle=$simpleFactory->createBicycle();
        $bicycle->driveTo('Paris');
    }
}