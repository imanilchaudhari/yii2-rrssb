<?php

namespace imanilchaudhari\rrssb;

/**
 * This is just an example.
 */
class Pinterest extends \imanilchaudhari\rrssb\Widget
{
    
    public function run()
    {
        Assets::register();

        return "Hello!";
    }
}
