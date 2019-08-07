<?php


namespace MultitonPattern;


class Multiton
{
    const INSTENCE_1='1';
    const INSTENCE_2='2';

    private static $instance=[];

    private function __construct()
    {
    }

    public function getInstance(string $instanceName):Multiton
    {
        if(!isset(self::$instance[$instanceName])){
            self::$instance[$instanceName]=new self();
        }

        return self::$instance[$instanceName];
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}