<?php


namespace Template;


class Car extends Vehicle
{

    protected function addEngine()
    {
        echo "Car engine \n";

        return $this;
    }

    protected function addWheel()
    {
        echo 4;

        return $this;
    }
}