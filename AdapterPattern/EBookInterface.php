<?php


namespace AdapterPattern;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage();
}