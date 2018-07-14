<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/stylesheet.css',
        'css/responsive.css',
        'css/fonts/awesome/css/font-awesome.css',
        'css/animate.css',
        'css/slick.css',
        'css/slick-theme.css',
    ];
    public $js = [
//        'js/jquery.min.js',
        'js/core.min.js',
        'js/script.js',
        'js/grayscale.js',
        'js/slick.js',
        'js/scripts.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
