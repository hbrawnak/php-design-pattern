<?php


namespace Template;


abstract class Vehicle
{
    public function make()
    {
        return $this
            ->start()
            ->gearUp()
            ->gearDown()
            ->stop()
            ->addEngine()
            ->addWheel();
    }

    protected function start()
    {
        echo "staring engine \n";

        return $this;
    }

    protected function gearUp()
    {
        echo "gear up \n";

        return $this;
    }

    protected function gearDown()
    {
        echo "gear down \n";

        return $this;
    }

    protected function stop()
    {
        echo "stopping engine  \n";

        return $this;
    }

    protected abstract function addEngine();

    protected abstract function addWheel();
}