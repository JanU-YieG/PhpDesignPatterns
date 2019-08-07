<?php


namespace PoolPattern;


class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt=\DateTime::class;
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
