<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

spl_autoload_register('_autoload');
function _autoload($className)
{
    $file = str_replace('\\','/',__DIR__ . '/'.$className . '.php');

    if(file_exists($file)) {
        require_once $file;
        return true;
    }

    return false;
}

//test SingleCase
$signleCase=\SingleCase\SingleCaseDesignPattern::getInstance();
$signleCase->setConfig('first',3,5,6);
var_dump($signleCase->getConfig('first'));


