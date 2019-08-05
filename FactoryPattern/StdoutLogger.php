<?php


namespace FactoryPattern;


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        // TODO: Implement log() method.
        echo $message;
    }
}