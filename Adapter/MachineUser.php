<?php

require 'ShopMachine.php';

use Adapter\ShopMachine;

$shopMachine = new ShopMachine();

$shopMachine->takeMoney(50);
$shopMachine->giveItem(1);