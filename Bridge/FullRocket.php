<?php
/**
 * Created by PhpStorm.
 * User: pedro.schleder
 * Date: 19/06/2018
 * Time: 15:56
 */

namespace Bridge;

require_once 'Rocket.php';

/**
 * Class FullRocket
 * @package Bridge
 *
 * This class extends the Rocket class and will receive the engine to be able to launch. The engines will implement
 * the LaunchApi.
 *
 */

class FullRocket extends Rocket
{
    protected $launchApi;

    public function __construct($launchApi)
    {
        parent::__construct($launchApi);
    }

    public function launch()
    {
        $this->launchApi->launch();
    }

}