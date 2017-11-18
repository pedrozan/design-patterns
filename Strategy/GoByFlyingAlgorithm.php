<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 18/11/2017
 * Time: 15:29
 */

namespace Vehicles;

require_once "GoAlgorithm.php";


class GoByFlyingAlgorithm implements GoAlgorithm
{
    public function Go()
    {
        echo "Now I'm flying.\n";
    }
}