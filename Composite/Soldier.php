<?php

namespace Composite;

include_once 'Unity.php';

class Soldier extends Unity
{
    private $name;
    private $headCount;

    public function __construct($name)
    {
        $this->name = $name;
        $this->headCount = 1;
    }

    public function getSoldierNames()
    {
        return $this->name;
    }

    public function getSquadCount()
    {
        return $this->headCount;
    }

    public function addUnity($member)
    {
        return false;
    }

    function removeUnity($member)
    {
        return false;
    }
}