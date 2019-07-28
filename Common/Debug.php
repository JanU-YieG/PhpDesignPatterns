<?php
namespace Common;

Trait Debug
{
    public function dd(...$param)
    {
        var_dump(...$param);
        exit(0);
    }
}