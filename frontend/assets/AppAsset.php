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
        'css/bootstrap-material-design.css',
        'css/responsive.css',
        'css/slick.css',
        'css/style.css',
        'css/style_theme.css',

    ];
    public $js = [
        'js/material.min.js',
        'js/all.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyB9CdZk3plxvoOJQEt_FT4ZOZ86rFRxTxw&amp;libraries=places&amp;callback=initAutocomplete',
        'js/custome.js',
         'js/notify.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
