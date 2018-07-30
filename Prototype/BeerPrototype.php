<?php

namespace Prototype;


abstract class BeerPrototype
{
    protected $name;
    protected $type;

    abstract function __clone();

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

}