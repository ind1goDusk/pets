<?php
/*
 * Dahlia Adams
 * 5/11/2023
 * 328/pets/index.php
 * controller for pets project
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');

//create fat free (f3) object instance
$f3 = Base::instance();

//define default route
$f3 -> route('GET /', function(){

    $view = new Template();
    echo $view->render('views/home.html');
});