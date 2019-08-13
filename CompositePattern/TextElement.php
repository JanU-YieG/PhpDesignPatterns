<?php


namespace CompositePattern;


class TextElement implements RenderableInterface
{
    private $text;

    public function __construct(string $text)
    {
        $this->text=$text;
    }
    public function render(): string
    {
        return $this->text;
    }
}