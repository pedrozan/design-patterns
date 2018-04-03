<?php

namespace Adapter;

require_once 'ShopClerk.php';
require_once 'VendingMachine.php';


class ShopMachine extends ShopClerk implements VendingMachine
{
    public function takeMoney($amount)
    {
        echo $this->receiveMoney($amount) . " to the machine\n";
    }

    public function giveItem($number)
    {
        switch ($number) {
            case 1:
                $goodies = 'chocolate bars';
                break;
            case 2:
                $goodies = 'Pepper Mints';
                break;
            default:
                $goodies = 'goodies';
                break;
        }
        echo "the machine says: " . $this->deliverGoodies($goodies) . "\n";
    }

}