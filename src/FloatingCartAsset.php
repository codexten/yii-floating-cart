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

    ];
    public $depends = [
        JqueryAsset::class,
    ];
}
