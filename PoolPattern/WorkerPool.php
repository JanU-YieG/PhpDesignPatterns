<?php


namespace PoolPattern;


class WorkerPool implements \Countable
{
    private $occupiedWorkers=[];

    private $freeWorkers=[];

    public function get():StringReverseWorker
    {
        count($this->freeWorkers)==0
            ?
            $worker=new StringReverseWorker()
            :
            $worker=array_pop($this->freeWorkers);

        $this->occupiedWorkers[spl_object_hash($worker)]=$worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key=spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])){
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key]=$worker;
        }

    }

    public function count():int
    {
        return count($this->freeWorkers)+count($this->occupiedWorkers);
    }
}