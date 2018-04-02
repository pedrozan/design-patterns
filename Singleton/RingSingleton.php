<?php

namespace Singleton;

class RingSingleton
{
    // Returns the only instance of this class
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    // The constructor is protected because there con only be one ring
    protected function __construct()
    {
    }

    // The clone is private so the ring can't be cloned
    protected function __clone()
    {
    }

    // We want to prevent deserialization
    protected function __wakeup()
    {
    }

    public function whichRing()
    {
        echo "The one ring to rule them all!";
    }
}