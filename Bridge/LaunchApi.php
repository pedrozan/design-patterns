<?php

namespace Bridge;

/**
 *
 * This is the interface that will start our Bridge Design Pattern implementation. It is implemented by
 * the RedEngine and BlueEngine classes.
 *
 */

interface LaunchApi
{
    public function launch();
}