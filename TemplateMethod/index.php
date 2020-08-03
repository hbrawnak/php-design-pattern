<?php

/*
 * Template methods are a fundamental technique for code reuse. They are particularly important in
 * class libraries, because they are the means for factoring out common behavior in library classes.
 * */

use Template\Bike;
use Template\Car;

require 'vendor/autoload.php';

//(new Bike())->make();
(new Car())->make();