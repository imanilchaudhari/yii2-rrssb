<?php

namespace imanilchaudhari\rrssb;

use Yii;
use imanilchaudhari\rrssb\Assets;

class ShareBar extends \yii\base\Widget
{
    public $title;
    public $url;
    
    // Email, Facebook, Twitter, GooglePlus, LinkedIn
    public $networks = [
        'Email' => [],
        'Facebook' => [],
        'Twitter' => [],
        'GooglePlus' => [],
        'LinkedIn' => []
    ]; 

    public function init(){
		parent::init();
		if(!$this->url)
            $this->url = Yii::$app->request->absoluteUrl;
        if(!$this->title)
            $this->title = Yii::$app->name;
	}
    
    public function run()
    {
        Assets::register($this->getView());       
        $views = '';
		foreach($this->networks as $network => $params){	  
          $views .= $this->render(strtolower($network), ['title' => $this->title, 'url' => $this->url], true);     
		}   
        return $this->render('sharebar', ['views'=>$views]);
    }
}
