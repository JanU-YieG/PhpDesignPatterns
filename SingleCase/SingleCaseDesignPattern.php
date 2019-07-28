<?php

namespace SingleCase;

use BaseClass\BaseClass;

class SingleCaseDesignPattern extends BaseClass
{
    private static $instance;
    private $config=array();
    private function __construct(){ }

    public static function getInstance()
    {
        if(self::$instance){
            return self::$instance;
        }
        self::$instance=new self();
        return self::$instance;
    }

    public function setConfig($index,...$var)
    {
        $this->config[$index]=$var;
    }

    public function getConfig($index)
    {
        return $this->config[$index];
    }


}