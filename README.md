Yii2 rrssb - A responsive social share bar widget for Yii2.
===========================================================
This is a responsive social bar widget for Yii2 projects. They said "Ridiculously Responsive Social Sharing Buttons" to it.

![alt tag](https://camo.githubusercontent.com/5b02049bfb12b14bf6466493294772a20b59076b/687474703a2f2f72727373622e6d6c2f6d656469612f72727373622d707265766965772e676966)

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
