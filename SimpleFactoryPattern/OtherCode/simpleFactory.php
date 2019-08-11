<?php
interface DB
{
    public function connect();
}

class Mysql implements DB
{
    public function connect()
    {
        // TODO: Implement connect() method.
        echo '连接了mysql';
    }
}

class Sqlite implements DB
{
    public function connect()
    {
        // TODO: Implement connect() method.
        echo '连上了sqlite';
    }
}

class Factory
{
    public static function createDB($type)
    {
        switch ($type){
            case 'mysql':
                return new Mysql();
                break;
            case 'sqlite':
                return new Sqlite();
                break;
            default:
                echo '参数错误';
        }
    }
}

//====客户端
class Client
{
    public function index($type)
    {
        $db=Factory::createDB($type);
        $db->connect();
    }
}

$client=new Client();
$client->index('mysql');
