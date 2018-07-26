<?php

include_once "SongGuesser.php";
include_once "GuesserOne.php";
include_once "GuesserTwo.php";

$guesserOne = new \ChainOfResponsibility\GuesserOne(false);
$guesserTwo = new \ChainOfResponsibility\GuesserTwo($guesserOne);

echo "Guess the song!\nFly to live, toooooo diiiieeee!!!\n";
$guesserTwo->guessSong('Fly to live, toooooo diiiieeee!!!');
echo "Guess the song!\nBaby don't hurt me, no more\n";
$guesserTwo->guessSong("Baby don't hurt me, no more");
echo "Guess the song!\nCall me Lucifer, cause I am in need of some restraint\n";
$guesserTwo->guessSong('Call me Lucifer, cause I am in need of some restraint');