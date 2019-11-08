<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'theme/css/font-awesome.min.css',
        'theme/css/bootstrap.min.css',
        'theme/css/jquery.fancybox.css',
        'theme/css/owl.carousel.css',
        'theme/css/animate.css',
        'theme/css/main.css',
        'theme/css/responsive.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
