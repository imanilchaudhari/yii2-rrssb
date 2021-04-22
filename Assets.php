<?php

namespace imanilchaudhari\rrssb;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@imanilchaudhari/rrssb/assets';
    public $css = [
        'rrssb.css',
    ];
    public $js = [
        'rrssb.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
