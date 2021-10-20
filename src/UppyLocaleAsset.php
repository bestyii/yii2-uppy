<?php

namespace bestyii\uppy;

use Yii;
use yii\web\AssetBundle;

class UppyLocaleAsset extends AssetBundle
{
    public $sourcePath = '@npm/uppy--locales/dist';

    public $js = [
        'zh_CN.min.js',
    ];

    public $depends = [
        '\bestyii\uppy\UppyAsset'
    ];

}
