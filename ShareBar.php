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
        'Email' => [
            'subject' => ''
        ],
        'Facebook' => [
            'href' => 'http://www.facebook.com/page',
            'action' => 'recommend',
            'colorscheme' => 'light',
            'width' => '200px'
        ],
        'Twitter' => [
            'data-via' => 'imanilchaudhari'
        ],
        'GooglePlus' => [            
			"size"=>"medium",
			"annotation"=>"bubble",
        ],
        'LinkedIn' => []
    ]; 

    public function init(){
		parent::init();
		Assets::register();
        if(!$this->url)
            $this->url = Yii::$app->request->absoluteUrl;
        if(!$this->title)
            $this->title = Yii::$app->name;
            
        
	}
    
    public function run()
    {
        $views = '';
		foreach($this->networks as $network => $params)
			$views .= $this->render(strtolower($network), ['title' => $this->title, 'url' => $this->url], true);            
            
        return $this->render('sharebar', ['views'=>$views]);
    }
}
