<?php


// Encapsulate and make then interchangeable
interface Logger
{
    public function log($data);
}


// Define a family of algorithm
class LogToFile implements Logger
{

    public function log($data)
    {
        echo "{$data}: Log to the file \n";
    }
}

class LogToDatabase implements Logger
{
    public function log($data)
    {
        echo "{$data}: Log to the database \n";
    }
}

class LogToWebService implements Logger
{
    public function log($data)
    {
        echo "{$data}: Log to the Web service \n";
    }
}

// Implementation of strategy

class App
{
    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }
}

$app = new App();
//$app->log('Info', new LogToDatabase());
//$app->log('Info', new LogToWebService());
$app->log('Info', new LogToFile());
