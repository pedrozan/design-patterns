<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 18/11/2017
 * Time: 15:28
 */

namespace Vehicles;

require_once "GoAlgorithm.php";


class GoByDrivingAlgorithm implements GoAlgorithm
{
    public function Go()
    {
        echo "Now I'm driving.\n";
    }
}