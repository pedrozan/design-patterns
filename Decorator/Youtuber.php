<?php

namespace Decorator;

include_once 'Influencer.php';

class Youtuber implements Influencer
{
    private $original;

    public function __construct($original)
    {
        $this->original = $original;
    }

    public function sayHello()
    {
        $this->original->sayHello();
        echo ' Making a video of my typos on YuTube!';
    }

}