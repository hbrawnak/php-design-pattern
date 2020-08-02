<?php


namespace Adapter;


class Book implements BookInterface
{
    public function open()
    {
        echo "opening the book \n";
    }

    public function turnPage()
    {
        echo "turning the page \n";
    }
}