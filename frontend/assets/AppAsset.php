<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/normalize.css',
        'css/font-awesome.min.css',
        'css/transition-animations.css',
        'css/owl.carousel.css',
        'css/magnific-popup.css',
        'css/animate.css',
        'css/main.css',
        'preview/lmpixels-demo-panel.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/page-transition.js',
        'js/imagesloaded.pkgd.min.js',
        'js/validator.js',
        'js/jquery.shuffle.min.js',
        'js/masonry.pkgd.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.hoverdir.js',
        'js/main.js',
        'preview/lmpixels-demo-panel.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
