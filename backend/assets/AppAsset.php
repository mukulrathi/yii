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
        'css/site.css',
    ];
    public $js = [
      "js/common.js",
      "https://maps.googleapis.com/maps/api/js?key=AIzaSyB9CdZk3plxvoOJQEt_FT4ZOZ86rFRxTxw&libraries=places&callback=initAutocomplete" ,
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
