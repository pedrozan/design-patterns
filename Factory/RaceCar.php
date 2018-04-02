<?php

namespace Factory;

require_once 'Car.php';


class RaceCar implements Car
{
    public function drive()
    {
        echo "I'm driving a race car!\n";
    }
}