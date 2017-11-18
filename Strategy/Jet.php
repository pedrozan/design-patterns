<?php

namespace Vehicles;

require_once "Vehicle.php";
require_once "GoByFlyingFastAlgorithm.php";


class Jet extends Vehicle
{
    public function __construct()
    {
        $this->setGoAlgorithm(new GoByFlyingFastAlgorithm());
    }

}