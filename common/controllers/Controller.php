<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/20/18
 * Time: 12:46 PM
 */

namespace common\controllers;

use lajax\translatemanager\helpers\Language;


// IMPORTANT: all Controllers must originate from this Controller!

class Controller extends \yii\web\Controller
{
    public function init()
    {
        Language::registerAssets();
        parent::init();
    }

}