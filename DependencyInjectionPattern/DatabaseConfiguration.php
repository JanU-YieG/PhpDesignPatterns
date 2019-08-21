<?php


namespace DependencyInjectionPattern;


use phpDocumentor\Reflection\Types\String_;

class DatabaseConfiguration
{

    private $host;
    private $port;
    private $username;
    private $password;

    public function __construct(string $host,int $port,string $username,string $password)
    {
        $this->username=$username;
        $this->host=$host;
        $this->password=$password;
        $this->port=$port;
    }

    public function getHost():string
    {
        return $this->host;
    }

    public function getPort():int
    {
        return $this->port;
    }

    public function getUsername():string
    {
        return $this->username;
    }

    public function getPassword():string
    {
        return $this->password;
    }
}





















