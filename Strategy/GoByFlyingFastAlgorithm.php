<?php

namespace Vehicles;

require_once "GoAlgorithm.php";


class GoByFlyingFastAlgorithm implements GoAlgorithm
{
    public function Go()
    {
        echo "Now I'm flying fast.\n";
    }
}