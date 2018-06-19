<?php

namespace Bridge;

require_once 'LaunchApi.php';

/**
 *
 * Class BlueEngine
 * @package Bridge
 *
 * This class is an implementation of the LaunchApi interface.
 *
 */

class BlueEngine implements LaunchApi
{
    public function launch()
    {
        echo "The blue engine is kinda fast!";
    }

}