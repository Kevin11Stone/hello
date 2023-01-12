<?php

// this  is my CONTROLLER for the hello project

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// instance (from object name) vs. static (from class name)
// create an instance of the Base class, f3 = fat-free-framework
$f3 = Base::instance();
// Java equivalent -> Base f3 = new Base();


// define a default route ("home page")
$f3->route('GET /', function (){
   //echo '<h1>Hello, Fat Free!</h1>';
    $view = new Template();
    echo $view->render('views/home.html');

});


// run Fat-Free
$f3->run();
// Java -> f3.run();