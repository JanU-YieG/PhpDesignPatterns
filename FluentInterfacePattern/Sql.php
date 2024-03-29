<?php
namespace FluentInterfacePattern;


class Sql
{
    private $fields=[];
    private $from=[];
    private $where=[];

    public function select(array $fields):Sql
    {
        $this->fields=$fields;
        return $this;
    }

    public function from(string $table,string $alias):Sql
    {
        $this->from[]=$table.'AS'.$alias;
        return $this;
    }

    public function where(string $condition):Sql
    {
        $this->where[]=$condition;
        return $this;
    }

    public function __toString():string
    {
        return sprintf(
            'select %s from %s where %s',
            join(',',$this->fields),
            join(',',$this->from),
            join('and',$this->where)
        )  ;
    }













}