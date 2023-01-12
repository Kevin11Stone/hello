<?php

// this  is my CONTROLLER for the hello project

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();
// Java equivalent -> Base f3 = new Base();


// define a default route ("home page")
$f3->route('GET /', function (){
   echo '<h1>Hello, Fat Free!</h1>';
});


// run Fat-Free
$f3->run();
// Java -> f3.run();