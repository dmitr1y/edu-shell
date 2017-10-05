<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OfflineModulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Offline Modules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offline-modules-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Offline Modules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            ['attribute' => 'name',
                'label' => 'Название модуля',
                'contentOptions' => ['style' => 'width:70px; word-wrap: break-word;'],
            ],

            ['attribute' => 'description',
                'label' => 'Описание',
//                ),
            ],

//            'win',
//            'mac',
            // 'lin',
            // 'libs',
            // 'instruction:ntext',
            // 'url:ntext',
            // 'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
