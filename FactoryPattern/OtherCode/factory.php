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

interface Factory
{
    public function createDB();
}

class MysqlFactory implements Factory
{
    public function createDB()
    {
        // TODO: Implement createDB() method.
        return new Mysql();
    }
}

class SqliteFactory implements Factory
{
    public function createDB()
    {
        // TODO: Implement createDB() method.
        return new Sqlite();
    }
}

//=======新增oracle数据库=====
//=======不用改前面的代码======
class Oracle implements DB
{
    public function connect()
    {
        // TODO: Implement connect() method.
        echo '连上oracle';
    }
}
class OracleFactory implements Factory
{
    public function createDB()
    {
        // TODO: Implement createDB() method.
        return new Oracle();
    }
}





//======客户端=====
$factory=new MysqlFactory();
$db=$factory->createDB();
$db->connect();

$factory=new SqliteFactory();
$db=$factory->createDB();
$db->connect();

//使用新的数据库
$factory=new OracleFactory();
$db=$factory->createDB();
$db->connect();
