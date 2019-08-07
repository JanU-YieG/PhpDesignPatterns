<?php


namespace BridgePattern;


class HelloWorldService extends Service
{
    /**
     * 定义抽象方法 get() 。
     * 根据传入的格式类定义来格式化输出 'Hello World' 。
     */
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}