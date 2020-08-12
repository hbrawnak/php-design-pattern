<?php

abstract class HomeChecker
{
    protected $successor;

    public abstract function check(HomeStatus $home);

    public function successor(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            echo "The doors are not locked \n";
        }

        $this->next($home);
    }
}

class Lights extends HomeChecker
{

    public function check(HomeStatus $home)
    {
        if (!$home->lightOff) {
            echo "The lights are still on \n";
        }

        $this->next($home);
    }
}

class Alarm extends HomeChecker
{

    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            echo "The alarm has not been set \n";
        }

        $this->next($home);
    }
}

class HomeStatus
{
    public $alarmOn = true;
    public $locked = true;
    public $lightOff = false;
}

/*Setup chain ring*/
$locks  = new Locks();
$lights = new Lights();
$alarm  = new Alarm();

/*Hooked together*/
$locks->successor($lights);
$lights->successor($alarm);

/*Called first ring of the chain*/
$locks->check(new HomeStatus());
