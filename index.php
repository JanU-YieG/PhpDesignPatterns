<?php
require_once '_autoloadFile.php';

/*test SingleCase*/
//$signleCase=\SingleCase\SingleCaseDesignPattern::getInstance();
//$signleCase->setConfig('first',3,5,6);
//var_dump($signleCase->getConfig('first'));

/*test BuilderPattern*/
//$testBuilder=new \BuilderPattern\TestBuilderPattern();
//var_dump($testBuilder->testBuildTruck());
//var_dump($testBuilder->testBuilderCar());
//foreach($testBuilder->testBuildTruck() as $v){
//    echo $v;
//}

/*test AbstractFactoryPattern*/
$testFactory=new \AbstractFactoryPattern\TestAbstractFactory();
$testFactory->testCanCreateDigitalProduct();
//$testFactory->testCanCreateShippableProduct();





















