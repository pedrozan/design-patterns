<?php

namespace Factory;

require_once 'Car.php';


class CityCar implements Car
{
    public function drive()
    {
        echo "Now driving a boring car in the city.";
    }

}