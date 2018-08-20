<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php foreach (['en-US', 'de-DE', 'ru-RU'] as $language) {
        echo $form->field($model->translate($language), "[$language]title")->textInput();
        echo $form->field($model->translate($language), "[$language]description")->textInput();
        echo $form->field($model->translate($language), "[$language]text")->textarea();
    }?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
