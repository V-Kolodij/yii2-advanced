<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/7/18
 * Time: 11:01 AM
 */

namespace common\components;

use codemix\localeurls\UrlManager as BasicUrlManager;
use common\models\Language;


class UrlManager extends BasicUrlManager
{

    public function init()
    {
        $this->languages = Language::getLanguageForUrl();
        parent::init();

    }

}