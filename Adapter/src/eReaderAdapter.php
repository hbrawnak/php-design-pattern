<?php


namespace Adapter;


class eReaderAdapter implements BookInterface
{
    protected $reader;

    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }


    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}