<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/31/18
 * Time: 10:37 AM
 */

namespace common\fixtures;


use yii\test\ActiveFixture;

class NewsFixture extends ActiveFixture
{
    public $modelClass = 'common\models\News';
    public $dataFile = 'common/fixtures/data/news.php';
}