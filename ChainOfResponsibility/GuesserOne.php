<?php

namespace ChainOfResponsibility;


class GuesserOne implements SongGuesser
{
    protected $nextOnChain;

    public function __construct($nextOnChain)
    {
        $this->nextOnChain = $nextOnChain;
    }

    public function next($lyrics)
    {
        if ($this->nextOnChain) {
            return $this->nextOnChain->guessSong($lyrics);
        }
        return false;
    }

    public function guessSong($lyrics)
    {
        if ($lyrics == "Baby don't hurt me, no more") {
            echo "GuesserOne: The song is 'What is Love?'! :D\n";
            $this->next($lyrics);
        } elseif ($lyrics == "Fly to live, toooooo diiiieeee!!!") {
            echo "GuesserOne: Aces High! From Iron Maiden! /,,/\n";
            $this->next($lyrics);
        } else {
            $this->next($lyrics);
        }
    }
}