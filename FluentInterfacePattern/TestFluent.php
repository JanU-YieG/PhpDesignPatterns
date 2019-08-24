<?php


namespace FluentInterfacePattern;


use PHPUnit\Framework\TestCase;

class TestFluent extends TestCase
{
    public function testBuildSQL()
    {
        $query=(new Sql())
            ->select(['foo','bar'])
            ->from('boorbar','f')
            ->where('f.bar=?');
        $this->assertEquals('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}