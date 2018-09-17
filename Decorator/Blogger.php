<?php

namespace Decorator;

include_once 'Influencer.php';

class Blogger implements Influencer
{
    public function sayHello()
    {
        echo "I'm writing hello on my blog!";
    }
}