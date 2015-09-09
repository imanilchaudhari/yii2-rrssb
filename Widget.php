<?php

namespace imanilchaudhari\rrssb;


class Widget extends \yii\base\Widget
{
    public $style;
    public $network = []; // Email, Facebook, Twitter, GooglePlus, LinkedIn
    
    
    public $Email;
    public $Facebook;
    public $Twitter;
    public $GooglePlus;
    public $LinkedIn;

    public function init(){
		parent::init();
		Assets::register();
	}
    
    public function run()
    {
        return "Hello!";
    }
}
