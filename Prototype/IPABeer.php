<?php

namespace Prototype;

include_once "BeerPrototype.php";

class IPABeer extends BeerPrototype
{
    function __construct()
    {
        $this->type = 'IPA';
    }

    function __clone()
    {
    }

}