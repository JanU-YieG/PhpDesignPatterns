<?php
require_once '_autoloadFile.php';
require_once __DIR__.'/vendor/autoload.php';

/*test SingletonPattern*/
//$signleCase=\SingletonPattern\SingleCaseDesignPattern::getInstance();
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
//$testFactory=new \AbstractFactoryPattern\TestAbstractFactory();
//$testFactory->testCanCreateDigitalProduct();
//$testFactory->testCanCreateShippableProduct();


/*test FactoryPattern*/
//$facotryLog=new \FactoryPattern\TestFactoryPattern();
//$facotryLog->testCanCreateFileFactory();
//$facotryLog->testCanCreateStdoutLogging();

/*test SimpleFactoryPattern*/
//$simpleFactory=new \SimpleFactoryPattern\TestSimpleFactoryPattern();
//$simpleFactory->testCanCreateBicycle();

/*test PoolPattern*/
//$testPool=new \PoolPattern\PoolTest();
//$testPool->testCanNewInstancesWithGet();

/*test PrototypePattern*/
//$testPrototype=new \PrototypePattern\PrototypeTest();
//$testPrototype->testCanGetFooBook();

/*test CompositePattern*/
//$test=new \CompositePattern\TestComposite();
//$test->testRender();




















