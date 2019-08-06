<?php

require_once 'car.php';

$car1 = new Voiture('4','blanche','Peugeot','2008');

echo $car1->read().'<br>';

echo $car1->roll().'<br>';

echo $car1->honk().'<br>';

