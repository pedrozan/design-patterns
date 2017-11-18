<?php

namespace Vehicles;

require_once "Vehicle.php";
require_once "GoByDrivingAlgorithm.php";


class StreetVehicle extends Vehicle
{
    public function __construct()
    {
        $this->setGoAlgorithm(new GoByDrivingAlgorithm());
    }

}