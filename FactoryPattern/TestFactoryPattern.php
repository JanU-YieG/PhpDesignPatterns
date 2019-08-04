<?php


namespace FactoryPattern;


class TestFactoryPattern
{
    public function testCanCreateStdoutLogging()
    {
        $logFactory=new StdoutLoggerFactory();
        $logger=$logFactory->createLogger();
        $logger->log('stdout logging');
    }

    public function testCanCreateFileFactory()
    {
        $logFactory=new FileLoggerFactory(__DIR__.'/test.txt');
        $logger=$logFactory->createLogger();
        $logger->log('file logging');
    }
}