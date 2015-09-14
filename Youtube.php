<?php

namespace imanilchaudhari\rrssb;

/**
 * This is just an example.
 */
class Youtube extends \imanilchaudhari\rrssb\Widget
{
    
    public function run()
    {
        Assets::register();

        return "Hello!";
    }
}
