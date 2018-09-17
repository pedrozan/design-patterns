<?php

namespace Composite;

include_once 'Unity.php';

class Squad extends Unity
{
    private $members = [];
    private $headCount;

    public function __construct()
    {
        $this->headCount = 0;
    }

    public function getSoldierNames()
    {
        if ($this->headCount == 0) {
            echo 'No unities on this squad.\n';
        }

        foreach ($this->members as $key => $member) {
            echo $key . ' ' . $member->getSoldierNames() . '\n';
        }
    }

    public function getSquadCount()
    {
        return $this->headCount;
    }

    public function addUnity($member)
    {
        $this->members[] = $member;
        $this->headCount++;
    }

    public function removeUnity($member)
    {
        unset($this->members[$member]);
    }
}