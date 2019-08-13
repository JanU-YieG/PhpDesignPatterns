<?php


namespace CompositePattern;


class InputElement implements RenderableInterface
{
    public function render(): string
    {
        return '<input type="text">';
    }
}