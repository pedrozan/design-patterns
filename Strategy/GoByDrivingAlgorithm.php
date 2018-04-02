<?php

namespace Vehicles;

require_once "GoAlgorithm.php";


class GoByDrivingAlgorithm implements GoAlgorithm
{
    public function Go()
    {
        echo "Now I'm driving.\n";
    }
}