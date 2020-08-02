<?php


namespace Adapter;


class Kindle implements eReaderInterface
{

    public function turnOn()
    {
        echo "Kindle turning on \n";
    }

    public function pressNextButton()
    {
        echo "Kindle press next button \n";
    }
}