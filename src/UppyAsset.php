<?php

namespace bestyii\uppy;

use Yii;
use yii\web\AssetBundle;

class UppyAsset extends AssetBundle
{
    public $sourcePath = '@npm/uppy/dist';
    public $css = [
        YII_ENV_DEV ? 'uppy.css' : 'uppy.min.css',
    ];

    public $js = [
        YII_ENV_DEV ? 'uppy.js' : 'uppy.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
