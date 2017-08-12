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
        'css/bootstrap.min.css',
        'css/site.css',
        'css/bootstrap-material-design.css',
        'css/font-awesome.css',
        'css/font-awesome.min.css',
        'css/responsive.css',
        'css/slick.css',
        'css/style.css',
        'css/style_theme.css',

    ];
    public $js = [
        'js/bootstrapMaterialDesign.js',
        'js/material.min.js',
        'js/slick.min.js',
        'js/custome.js',
        'js/all.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
