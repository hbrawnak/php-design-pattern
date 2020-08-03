<?php


namespace Template;


class Bike extends Vehicle
{

    protected function addEngine()
    {
        echo "Bike engine \n";

        return $this;
    }

    protected function addWheel()
    {
        echo 2;

        return $this;
    }
}