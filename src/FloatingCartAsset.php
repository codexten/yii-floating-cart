<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 18/3/19
 * Time: 4:44 PM
 */

namespace codexten\yii\floatingCart;

use yii\web\JqueryAsset;

class FloatingCartAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@codexten/yii/floatingCart/assets';
    public $js = [
        'js/main.js',
    ];
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700',
        'css/reset.css',
        'css/style.css',
    ];
    public $depends = [
        JqueryAsset::class,
    ];
}
