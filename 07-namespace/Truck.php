<?php

namespace Parking\Pro;

use Parking\Motorcycle;
use Parking\Car;

class Truck
{
    private $cars = [];

    public function __construct()
    {
        $this->cars = [
            new Car(),
            new Motorcycle(),
            // new \PDO()
        ];
    }
}

?>