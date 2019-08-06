<?php


namespace AdapterPattern;


class Book implements BookInterface
{
    private $page;

    public function open()
    {
        // TODO: Implement open() method.
        $this->page=1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }
}