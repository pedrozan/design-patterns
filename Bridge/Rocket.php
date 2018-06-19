<?php
/**
 * Created by PhpStorm.
 * User: pedro.schleder
 * Date: 19/06/2018
 * Time: 15:50
 */

namespace Bridge;

/**
 * Class Rocket
 * @package Bridge
 *
 * That is the abstract class for rockets. It will have to receive an engine that implements the LaunchApi.
 *
 */


abstract class Rocket
{
    protected $launchApi;

    protected function __construct($launchApiImplementer)
    {
        $this->launchApi = $launchApiImplementer;
    }

    public abstract function launch();
}