<?php

namespace SingleCase;

use BaseClass\BaseClass;

class SingleCaseDesignPattern extends BaseClass
{
    public function index()
    {
        $this->dd('dd','lll');
    }

    public function testSomeThing()
    {
        $a=bcadd(4,5);
        echo $a;
        $this->dd(empty($a));
        $a=null;
        $this->dd(isset($a));
    }
}