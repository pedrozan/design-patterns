<?php

namespace Adapter;


interface VendingMachine
{
    public function takeMoney($amount);
    public function giveItem($number);

}