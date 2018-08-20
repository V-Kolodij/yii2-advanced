<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/20/18
 * Time: 11:36 AM
 */

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;?>
    <p class="lead">Current <?= Yii::$app->language ?>.</p>
    <p class="lead">Original <?= Yii::$app->sourceLanguage ?>.</p>
<br>
<?php if(isset($news)):?>
    <?php foreach ($news as $new ):?>
        <?= Yii::t('app', 'Title: ')?>
        <?= Html::encode($new->title)?>
    <br>
        <?= Yii::t('app', 'Description:')?>
        <?= Html::encode($new->description);?>
   <br>
        <?= Lx::t('app', 'Text:')?>
        <?= Html::encode($new->text);?>
<?php endforeach ?>
<?php endif;?>
<?= \lajax\translatemanager\widgets\ToggleTranslate::widget(); ?>
