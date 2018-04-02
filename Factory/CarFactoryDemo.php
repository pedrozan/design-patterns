<?php

require 'CarFactory.php';

use Factory\CarFactory;

$carFactory = new CarFactory();

$raceCar = $carFactory->getCar('race');
$cityCar = $carFactory->getCar('city');

$raceCar->drive();
$cityCar->drive();
