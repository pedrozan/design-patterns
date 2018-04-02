<?php

require_once 'RingSingleton.php';

use Singleton\RingSingleton;

$ring = RingSingleton::getInstance();

var_dump($ring === RingSingleton::getInstance()); // bool(true)

$ring->whichRing();

// $anotherRing = new RingSingleton(); // will throw error