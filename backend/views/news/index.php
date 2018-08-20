<?php

use lajax\translatemanager\models\Language;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <div class="row">
        <div class = "col-xs-2">
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
        <div class="col-xs-10">
            <?php echo Yii::$app->user->id ?>(<?= Yii::$app->user->identity->username ?>)
            <p>
                <?= Html::a(Yii::t('app', 'Create News'), ['create'], ['class' => 'btn btn-success ']) ?>
            </p>
            <div class="btn-group btn-group-sm pull-right">
            <?= $dataProvider->sort->link('id',['class' => 'btn btn-default'])?>
            <?= $dataProvider->sort->link('title', ['class' => 'btn btn-default'])?>

            </div>
            <div class="row"> </div>
<!--            <ul class="nav nav-pills" role="tablist">-->
<!--                <li role="presentation"><a href="#">Home <span class="badge">42</span></a></li>-->
<!--                <li role="presentation" class="active"><a href="#">Profile</a></li>-->
<!--                <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>-->
<!--            </ul>-->
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li ><a href="#tab-1" data-toggle="tab">111</a></li>
                    <li><a href="#tab-2" data-toggle="tab">222</a></li>
                    <li class="active"><a href="#tab-3" data-toggle="tab">333</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="tab-1">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'description',
//            'text:ntext',
//            'user_id',

            ['class' => 'yii\grid\ActionColumn',
                'visibleButtons' => [
                    'update' => function ($model) {
                        return Yii::$app->user->can('updateNews', ['author_id' => $model->user_id]);
                    },
                    'delete' => function ($model) {
                        return Yii::$app->user->can('updateNews', ['author_id' => $model->user_id]);
                    },
                ],
            ],
        ],
    ]); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-2">ERERERERERE
                  <?php //var_dump(Language::find()->select('language_id')->where(['status'=>Language:: STATUS_ACTIVE])->asArray()->column());die;
                   ?>
                    </div>
                    <div class="tab-pane fade in active" id="tab-3">
                    <div id="red" style="height: 50px; width: 50px; background-color: red"></div>
                        <div style="height: 50px; width: 50px; background-color: blue"></div>
                        <div style="height: 50px; width: 50px; background-color: green"></div>

                    </div>
                </div>


            </div>


        </div>
    </div>

</div>
