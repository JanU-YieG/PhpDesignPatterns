<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
spl_autoload_register('_autoload');
//require_once __DIR__ . '/'.'SingleCase\SingleCaseDesignPattern'.'.php';
function _autoload($className)
{
    $file = str_replace('\\','/',__DIR__ . '/'.$className . '.php');
    try{
        require_once $file;
    }catch (Exception $e){
        var_dump($e);
        die(1);
    }
}

$signleCase=new \SingleCase\SingleCaseDesignPattern();
$signleCase->testSomeThing();
