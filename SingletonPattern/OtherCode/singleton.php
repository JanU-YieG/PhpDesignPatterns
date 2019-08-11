<?php
//封锁new对象,使用private/protected construct
//留个接口来new对象
//final防止继承，防止继承修改construct权限
//禁止clone
class Single
{
    protected static $instance=null;

    //封锁new
    //该方法不能被覆盖，若类前加final则类不能被继承
    final protected function __construct()
    {
    }
    //封锁clone
    final protected function __clone()
    {
    }

    //new控制权归还给类本身
    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance=new self();
        }
        return self::$instance;
    }
}

$object1=Single::getInstance();
$object2=Single::getInstance();
//$object2=clone $object1;
//2个对象是同一个对象的时候才全等
if($object1===$object2){
    echo '相等';
}else{
    echo '不相等';
}
