<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAssetLogin extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/backend/';
    public $css = [
        'css/bootstrap/css/bootstrap.min.css',
        'css/plugins/font-awesome/css/font-awesome.min.css',
        'css/dist/css/AdminLTE.min.css',
        'css/dist/css/AdminLTE.min.css',
        'css/plugins/iCheck/square/blue.css',
    ];
    public $js = [
            'css/plugins/jQuery/jquery-2.2.3.min.js',
            'css/bootstrap/js/bootstrap.min.js',
            'css/plugins/iCheck/icheck.min.js',
            'css/dist/js/satusoftware_icheck.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}