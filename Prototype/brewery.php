<?php

include_once "IPABeer.php";
include_once "LagerBeer.php";

$ipaProto = new \Prototype\IPABeer();
$lagerProto = new \Prototype\LagerBeer();

$ipa1 = clone $ipaProto;
$ipa1->setName("Vedett Extra Session");

$lager1 = clone $lagerProto;
$lager1->setName("Colorado Cauim");

$ipa2 = clone $ipaProto;
$ipa2->setName("Azaccas Founders");

echo "First IPA: " . $ipa1->getName() . "\n";
echo "Then Lager: " . $lager1->getName() . "\n";
echo "and another IPA: " . $ipa2->getName() . "\n";

$lager2 = clone $lager1;
echo "let's repeat the lager: " . $lager2->getName();