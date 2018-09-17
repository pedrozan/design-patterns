<?php

namespace Decorator;

include_once 'Influencer.php';

class Instagrammer implements Influencer
{
    private $original;

    public function __construct($original)
    {
        $this->original = $original;
    }

    public function sayHello()
    {
        $this->original->sayHello();
        echo ' Taking a picture of it and posting on Instagram!';
    }
}