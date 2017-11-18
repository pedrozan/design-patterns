<?php
require "Helicopter.php";
require "Jet.php";
require "StreetVehicle.php";

use Vehicles\Helicopter;
use Vehicles\Jet;
use Vehicles\StreetVehicle;

$streetRacer = new StreetVehicle();
$helicopter = new Helicopter();
$jet = new Jet();

$streetRacer->go();
$helicopter->go();
$jet->go();