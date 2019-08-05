<?php


namespace PrototypePattern;


use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype=new FooBookPrototype();
        $barPrototype=new BarBookPrototype();

        for($i=0;$i<10;$i++){
            $book=clone $fooPrototype;
            $book->setTitle('Foo Book No '.$i);
            echo $book->getTitle();
            $this->assertInstanceOf(FooBookPrototype::class,$book);
        }

        for ($i=0;$i<5;$i++){
            $book=clone $barPrototype;
            $book->setTitle('Bar Book No '.$i);
            echo $book->getTitle();
            $this->assertInstanceOf(BarBookPrototype::class,$book);
        }
    }
}