<?php

namespace Bridge;

require_once 'LaunchApi.php';

/**
 *
 * Class RedEngine
 * @package Bridge
 *
 * This class is an implementation of the LaunchApi interface.
 *
 */

class RedEngine implements LaunchApi
{
    public function launch()
    {
        echo "The red engine is really fast!!!";
    }

}