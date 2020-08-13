<?php

interface Subject
{
    public function attach($observable);

    public function detach($observer);

    public function notify();
}

interface Observer
{
    public function handle();
}

class Login implements Subject
{
    protected $observers = [];

    public function attach($observable)
    {
        if (is_array($observable)) {
            foreach ($observable as $observer) {
                if (!$observer instanceof Observer)
                    throw new Exception();
                $this->attach($observer);
            }

            return;
        }

        $this->observers[] = $observable;

        return;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    public function fire()
    {
        $this->notify();
    }
}

class LogHandler implements Observer
{
    public function handle()
    {
        echo "Logged in something \n";
    }
}

class EmailHandler implements Observer
{
    public function handle()
    {
        echo "Fire of an email \n";
    }
}

$login = new Login();
$login->attach([
    new LogHandler(),
    new EmailHandler()
]);

$login->fire();

