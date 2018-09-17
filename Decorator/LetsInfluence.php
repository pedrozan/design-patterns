<?php

use Decorator\Blogger;
use Decorator\Instagrammer;
use Decorator\Youtuber;

include_once 'Blogger.php';
include_once 'Instagrammer.php';
include_once 'Youtuber.php';

$influencer = new Youtuber(
    new Instagrammer(
    new Blogger()
));

$influencer->sayHello();