<?php


namespace CompositePattern;


use PHPUnit\Framework\TestCase;

class TestComposite extends TestCase
{
    public function testRender()
    {
        $form=new Form();
        $form->addElement(new TextElement('Email'));
        $form->addElement(new InputElement());
        $embed=new Form();
        $embed->addElement(new TextElement('password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);
        var_dump($form->render());
    }
}