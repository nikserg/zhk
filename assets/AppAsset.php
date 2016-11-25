<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/css/fonts.css',
        'web/css/slick.css',
        'web/css/jquery.custom-scrollbar.css',
        'web/css/style.css',
        'web/css/media.css',
    ];
    public $js = [
        "web/js/slick.min.js",
        "web/js/jquery.custom-scrollbar.min.js",
        "web/js/user.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
