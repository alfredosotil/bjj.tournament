<?php
/**
 * @see      http://www.yiiframework.com/
 *
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license   http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since  2.0
 */
class AppAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $basePath = '@webroot';
    /**
     * @var string
     */
    public $baseUrl = '@web';
    /**
     * @var array
     */
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/jquery-ui.min.css',
        'css/animate.css',
        'css/css-plugin-collections.css',
        'css/menuzord-skins/menuzord-boxed.css',
        'css/style-main.css',
        'css/colors/theme-skin-sky-blue.css',
        'css/preloader.css',
        'css/custom-bootstrap-margin-padding.css',
        'css/responsive.css',
        'css/style-main-dark.css',
        'js/revolution-slider/css/settings.css',
        'js/revolution-slider/css/layers.css',
        'js/revolution-slider/css/navigation.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'js/jquery-2.2.4.min.js',
        'js/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'js/jquery-plugin-collection.js',
        'js/revolution-slider/js/jquery.themepunch.tools.min.js',
        'js/revolution-slider/js/jquery.themepunch.revolution.min.js',
        'js/calendar-events-data.js',
        'js/custom.js',
        'js/revolution-slider/js/extensions/revolution.extension.actions.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.carousel.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.migration.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.navigation.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.parallax.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.video.min.js',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
