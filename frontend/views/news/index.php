<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php
        foreach ($dataProvider->models as $model) {
            echo $this->render('short', [
                'model' => $model
            ]);
        }
        ?>

    </div>
