<?php

require_once 'FullRocket.php';
require_once 'RedEngine.php';
require_once 'BlueEngine.php';

/**
 *
 * This file is the end of the Bridge Pattern, here we will mix together the rocket and the diferent engines to
 * check which one is faster.
 *
 * Notice that we can use the same FullRocket with any engine. If we than change an engine or the fullRocket
 * implementation the other parts won't be affected.
 */

$redEngine = new \Bridge\RedEngine();
$blueEngine = new \Bridge\BlueEngine();
$redRocket = new \Bridge\FullRocket($redEngine);
$blueRocket = new \Bridge\FullRocket($blueEngine);

$redRocket->launch();
$blueRocket->launch();
