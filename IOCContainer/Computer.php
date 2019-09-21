<?php


namespace IOCContainer;


class Computer
{
    public $board;

    public function __construct(Board $board)
    {
        $this->board=$board;
    }
}