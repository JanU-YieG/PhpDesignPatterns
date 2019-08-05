<?php


namespace FactoryPattern;


interface LoggerFactory
{
    public function createLogger():Logger;
}