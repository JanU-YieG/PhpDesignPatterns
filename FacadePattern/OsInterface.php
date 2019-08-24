<?php


namespace FacadePattern;


interface OsInterface
{
    public function halt();

    public function getName():string;
}