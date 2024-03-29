<?php


namespace CompositePattern;


class Form implements RenderableInterface
{
    private $elements;

    public function render(): string
    {
        $formCode='<form>';
        foreach ($this->elements as $element){
            $formCode.=$element->render();
        }
        $formCode.='</form>';
        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[]=$element;
    }
}