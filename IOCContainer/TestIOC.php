<?php


namespace IOCContainer;


class TestIOC
{
    public function index()
    {
        $container=new Container();

        $container->bind('Board',function ($container){
            return new CommonBoard;
        });

        $container->bind('Computer',function ($container,$module){
            return new Computer($container->make($module));
        });

        $computer=$container->make('Computer',['Board']);

    }
}