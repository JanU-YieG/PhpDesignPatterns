<?php
class User implements SplSubject
{
    public $lognum;
    public $hobby;
    public $observers=null;
    
    public function __construct($hobby)
    {
        $this->lognum=rand(1,9);
        $this->hobby=$hobby;
        $this->observers=new SplObjectStorage();
    }

    public function login()
    {
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->observers->detach($observer);
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        $this->observers->rewind();
        while ($this->observers->valid()){
            $observer=$this->observers->current();
            $observer->update($this);
            $this->observers->next();
        }
    }
}

class Secrity implements SplObserver
{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        if($subject->lognum <3){
            echo '第'.$subject->lognum.'次安全登陆';
        }else{
            echo '第'.$subject->lognum.'次异常登陆';
        }
    }
}

class Ad implements SplObserver
{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        if($subject->hobby == 'sports'){
            echo 'NBA球赛门票8折优惠';
        }else{
            echo '滚去学习吧你';
        }
    }
}


//===实施观察
$user=new User('study');
$user->attach(new Secrity());
$user->attach(new Ad());

$user->login();






















