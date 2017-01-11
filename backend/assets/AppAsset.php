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
    // public $sourcePath = '@backend/web/css/dist/';
    public $css = [
        'css/dist/css/AdminLTE.min.css',
        'css/bootstrap/css/bootstrap.min.css',
        'css/plugins/iCheck/square/blue.css',
        'css/site.css',
    ];
    public $js = [
        'css/dist/js/app.min.js'
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
