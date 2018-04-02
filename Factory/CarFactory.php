<?php

namespace Factory;

require_once 'RaceCar.php';
require_once 'CityCar.php';


class CarFactory
{
    // receives the type of car and return the proper object
    public function getCar($type)
    {
        switch ($type) {
            case 'race':
                return new RaceCar();
                break;
            case 'city':
                return new CityCar();
                break;
            default:
                return null;
        }
    }

}