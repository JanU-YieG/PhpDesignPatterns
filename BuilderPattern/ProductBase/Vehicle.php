<?php


namespace BuilderPattern\ProductBase;


abstract class Vehicle
{
    private $data=[];

    public function setPart($key,$value)
    {
        $this->data[$key]=$value;
    }

    public function getPart($key)
    {
        return $this->data[$key];
    }

    public function getParts()
    {
        return $this->data;
    }
}