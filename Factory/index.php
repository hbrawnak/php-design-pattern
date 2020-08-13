<?php

class AutomobileFactory
{
    public static function make($car)
    {
        if ($car == '') {
            throw new Exception('Invalid Car Type.');
        } else {
            $className = ucfirst($car);

            if (class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('Car type not found.');
            }
        }
    }
}

interface Car
{
    public function say();
}

class Bugatti implements Car
{
    public function __construct()
    {
        echo "Creating Bugatti \n";
    }

    public function say()
    {
        return "I'm Bugatti. \n";
    }
}

class Tesla implements Car
{
    public function __construct()
    {
        echo "Creating Tesla \n";
    }

    public function say()
    {
        return "I'm Tesla. \n";
    }
}

$tesla   = AutomobileFactory::make('tesla');
print_r($tesla->say());

$bugatti = AutomobileFactory::make('bugatti');
print_r($bugatti->say());
