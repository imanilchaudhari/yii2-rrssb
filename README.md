Yii2 rrssb - A responsive social share bar widget for Yii2.
===========================================================
This is a responsive social bar widget for Yii2 projects. They said "Ridiculously Responsive Social Sharing Buttons" to it.

![alt tag](https://github.com/kni-labs/rrssb/raw/master/media/rrssb-preview.gif)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist imanilchaudhari/yii2-rrssb "1.0"
```

or add

```
"imanilchaudhari/yii2-rrssb": "1.0"
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
