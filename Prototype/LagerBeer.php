<?php

namespace Prototype;

include_once "BeerPrototype.php";

class LagerBeer extends BeerPrototype
{
    function __construct()
    {
        $this->type = "Lager";
    }

    function __clone()
    {
    }

}