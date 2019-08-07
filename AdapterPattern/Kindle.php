<?php

namespace AdapterPattern;


class Kindle implements EBookInterface
{
    private $page=1;

    private $totalPages=100;

    public function pressNext()
    {
        // TODO: Implement pressNext() method.
        $this->page++;
    }

    public function unlock()
    {
        // TODO: Implement unlock() method.

    }

    public function getPage()
    {
        // TODO: Implement getPage() method.
        return [$this->page,$this->totalPages];
    }
}