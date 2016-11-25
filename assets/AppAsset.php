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
        'css/fonts.css',
        'css/slick.css',
        'css/jquery.custom-scrollbar.css',
        'css/style.css',
        'css/media.css',
    ];
    public $js = [
        "js/slick.min.js",
        "js/jquery.custom-scrollbar.min.js",
        "js/user.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
