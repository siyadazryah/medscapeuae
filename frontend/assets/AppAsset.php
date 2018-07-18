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
        'css/prettyPhoto.css'
    ];
    public $js = [
//        'https://code.jquery.com/jquery-3.2.1.slim.min.js',
        'js/core.min.js',
        'js/script.js',
        'js/grayscale.js',
        'js/slick.js',
        'js/scripts.js',
//        'js/jquery-1.6.1.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
