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


class Bugatti
{
    public function __construct()
    {
        echo "Creating Bugatti \n";
    }

    public function getName()
    {
        return "I'm Bugatti. \n";
    }
}

class Tesla
{
    public function __construct()
    {
        echo "Creating Tesla \n";
    }

    public function getName()
    {
        return "I'm Tesla. \n";
    }
}

$car = AutomobileFactory::make('Bugatti');

print_r($car->getName());
