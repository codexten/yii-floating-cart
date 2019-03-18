<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 18/3/19
 * Time: 4:44 PM
 */

namespace codexten\yii\floatingCart;

use yii\base\Widget;

class FloatingCartWidget extends Widget
{

    public function run()
    {
        FloatingCartAsset::register($this->view);

        return $this->render('cart');
    }
}