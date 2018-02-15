<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);


//Required files
require_once('vendor/autoload.php');
require_once('/home/asinghgr/config.php');
require_once('model/db-function.php');

//Create an instance of the Base Class
$f3 = Base :: instance();

$f3->route('GET /', function ($f3, $params)
{
    echo "Student list<br>";
    $dbh = connect();
});

//Run fat free
$f3->run();