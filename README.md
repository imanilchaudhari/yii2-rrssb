Yii2 rrssb - A responsive social share bar widget for Yii2.
===========================================================
This is a responsive social bar widget for Yii2 projects. They said "Ridiculously Responsive Social Sharing Buttons" to it.

![alt tag](https://camo.githubusercontent.com/8220ad79e112c043d99bef42d5d1a39aef4566b34d297c28dbf5acb07268fdb6/68747470733a2f2f72727373622e6e65746c6966792e636f6d2f6d656469612f72727373622d707265766965772e676966)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist imanilchaudhari/yii2-rrssb "dev-master"
```

or add

```
"imanilchaudhari/yii2-rrssb": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

<?=\imanilchaudhari\rrssb\ShareBar::widget([
        'title' => 'Title Content', // i.e. $model->title
        'media' => 'image.jpg', // Media Content
        'networks' => [
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
        ]
    ]); 
?>

```


About
-------

[Yii2-rrssb](https://github.com/imanilchaudhari/yii2-rrssb) is inspired by [RRSSB](https://github.com/kni-labs/rrssb).
