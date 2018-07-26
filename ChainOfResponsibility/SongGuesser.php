<?php

namespace ChainOfResponsibility;


interface SongGuesser
{
    function __construct( $nextOnChain );
    public function next( $lyrics );
}