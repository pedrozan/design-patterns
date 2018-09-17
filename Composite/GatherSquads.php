<?php

use Composite\Soldier;
use Composite\Squad;

include_once 'Soldier.php';
include_once 'Squad.php';

$rambo = new Soldier('John Rambo');
echo 'First recruit: ' . $rambo->getSoldierNames() . '\n';
echo 'First recruit heads: ' . $rambo->getSquadCount() . '\n';

$chuckNorris = new Soldier('Chuck Norris');
echo 'Second recruit: ' . $chuckNorris->getSoldierNames() . '\n';
echo 'Second recruit heads: ' . $chuckNorris->getSquadCount() . '\n';

$schwarzenegger = new Soldier('Schwarzenneger');
echo 'Third recruit: ' . $schwarzenegger->getSoldierNames() . '\n';
echo 'Third recruit heads: ' . $schwarzenegger->getSquadCount() . '\n';

$platoon1 = new Squad();
$platoon1->addUnity($rambo);
$platoon1->addUnity($schwarzenegger);

$platoon2 = new Squad();
$platoon2->addUnity($chuckNorris);

echo 'Guys with help\n';
$platoon1->getSoldierNames();
echo 'Chuck Norris:\n';
$platoon2->getSoldierNames();

echo 'Everyone can work together\n';
$army = new Squad();
$army->addUnity($platoon1);
$army->addUnity($platoon2);

$army->getSoldierNames();