<?php

namespace ChainOfResponsibility;


class GuesserTwo implements SongGuesser
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
            echo "GuesserTwo: 'What is Love?'! I <3 this song!\n";
            $this->next($lyrics);
        } elseif ($lyrics == "Call me Lucifer, cause I am in need of some restraint") {
            echo "GuesserTwo: That one I know! 'Sympathy for the Devil' by The Rolling Stones.\n";
            $this->next($lyrics);
        } else {
            $this->next($lyrics);
        }
    }
}