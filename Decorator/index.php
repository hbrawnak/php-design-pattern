<?php

/*
 * A decorator allows us to dynamically extend the behavior of a particular object at runtime, without
 * needing to resort to unnecessary inheritance.
 *
 * Know as Wrapper
 *
 * Other Definition: Attach additional responsibilities to an object dynamically. Decorators provide a
 * flexible alternative to subclass for extending functionality.
 * */

interface CarService
{
    public function getCost();

    public function getDescription();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 19;
    }

    public function getDescription()
    {
        return 'Basic inspection';
    }
}

class OilChange implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }


    public function getCost()
    {
        return 10 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and Oil Change';
    }
}

class TireRotation implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }


    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and Tire Rotation';
    }
}

$service = new OilChange(new TireRotation(new BasicInspection()));
echo $service->getDescription();