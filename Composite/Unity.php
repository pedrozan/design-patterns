<?php

namespace Composite;


abstract class Unity
{
    abstract function getSoldierNames();
    abstract function getSquadCount();
    abstract function addUnity($member);
    abstract function removeUnity($member);
}