<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       
        'css/site.css',
        'css/navbar.css',
        'css/custom.css',
        'css/slick.min.css',
        'css/slick-theme.css',
        'css/slick-theme.min.css',
        'css/templatemo.css',
        'css/templatemo.min.css',
    ];
    public $js = [
        'js/bootstrap-notify.js',
        'js/bootstrap.bundle.min.js',
        'js/handleDropdown.js',
        'js/bootstrap-notify.min.js',
        'js/templatemo.js',
        'js/templatemo.min.js',
        'js/slick.min.js',
        
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
