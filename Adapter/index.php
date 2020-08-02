<?php

require 'vendor/autoload.php';

use Adapter\Book;
use Adapter\BookInterface;
use Adapter\Kindle;
use Adapter\eReaderAdapter;
use Adapter\Nook;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

//Reading Book
//(new Person())->read(new Book());

//Reading Kindle
//(new Person())->read(new eReaderAdapter(new Kindle()));

//Reading Nook
(new Person())->read(new eReaderAdapter(new Nook()));
