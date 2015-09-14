<?php

namespace imanilchaudhari\rrssb;

use Yii;
use imanilchaudhari\rrssb\Assets;

class ShareBar extends \yii\base\Widget
{
    public $title;
    public $media;
    
    // Email, Facebook, Github,  GooglePlus, Hackernews, LinkedIn, Pinterest, Pocket, Reddit, Tumblr, Twitter, Vk, Youtube 
    public $networks = [
        'Email',
        'Facebook',
        'Github',
        'GooglePlus',
        'Hackernews',
        'LinkedIn',
        'Pinterest',
        'Pocket',
        'Reddit',
        'Tumblr',
        'Twitter',
        'Vk',
        'Youtube'       
    ]; 

    public function init(){
		parent::init();
		if(!$this->title)
            $this->title = Yii::$app->name;
        if(!$this->media)
            $this->media = Yii::$app->urlManager->baseUrl.'/logo.png';
	}
    
    public function run()
    {
        Assets::register($this->getView());       
        $views = '';
		foreach($this->networks as $network => $params){	  
          $views .= $this->render(strtolower($params), ['title' => $this->title, 'media' => $this->media, 'url' => Yii::$app->request->absoluteUrl], true);     
		}   
        return $this->render('sharebar', ['views'=>$views]);
    }
}
