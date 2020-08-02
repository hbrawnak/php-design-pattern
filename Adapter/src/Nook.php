<?php


namespace Adapter;


class Nook implements eReaderInterface
{

    public function turnOn()
    {
        echo "Nook turning on \n";
    }

    public function pressNextButton()
    {
        echo "Nook press next button \n";
    }
}