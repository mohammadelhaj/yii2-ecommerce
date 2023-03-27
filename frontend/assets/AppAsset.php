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
       
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/bootstrap-notify.js',
        'js/bootstrap-notify.min.js',
        'js/handleDropdown.js',
        'js/slick.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
