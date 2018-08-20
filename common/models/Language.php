<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/7/18
 * Time: 2:18 PM
 */

namespace common\models;
use lajax\translatemanager\models\Language as BasicLanguage;

class Language extends  BasicLanguage
{

    public static function getLanguageForUrl()
    {
        return self::find()->select('language_id')->where(['status' => Language:: STATUS_ACTIVE])->asArray()->column();
    }

}