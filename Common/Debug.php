<?php
namespace Common;

Trait Debug
{
    public function dd(...$param)
    {
        var_dump($param);
        die(0);
    }

    public function assertInstanceOf($class,object $object)
    {
        ($object instanceof $class)
            ?
            print $object . 'is-class' . get_class($object).'<br>'
            :
            print $object.'-isNot-class'.get_class($object).'<br>';
    }
}