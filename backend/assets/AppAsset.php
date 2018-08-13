<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/sytle.css',
        'css/colmeia.css',
        'css/bootstrap.css',
        'css/bootstrap.main.css',
    ];

    public $js = [
        'js/col.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
