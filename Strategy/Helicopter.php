<?php

namespace Vehicles;

require_once "Vehicle.php";
require_once "GoByFlyingAlgorithm.php";


class Helicopter extends Vehicle
{
    public function __construct()
    {
        $this->setGoAlgorithm(new GoByFlyingAlgorithm());
    }

}