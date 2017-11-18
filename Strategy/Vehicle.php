<?php

namespace Vehicles;


class Vehicle
{
    private $goAlgorithm;

    /**
     * @param mixed $goAlgorithm
     */
    public function setGoAlgorithm($goAlgorithm)
    {
        $this->goAlgorithm = $goAlgorithm;
    }

    public function go()
    {
        $this->goAlgorithm->Go();
    }

}