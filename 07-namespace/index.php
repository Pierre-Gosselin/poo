<?php

/*
require_once 'Car.php';
require_once 'motorcycle.php';
require_once 'truck.php';
*/
spl_autoload_register(function ($class) {
    
    $class = explode('\\', $class);
    $class = end($class);

    require_once $class.'.php';
});


use Parking\Car;
use Parking\Motorcycle;
use Parking\Pro\Truck;

$car = new Car();
$motorcycle = new Motorcycle();
$truck = new Truck();

var_dump($car);
var_dump($motorcycle);
var_dump($truck);