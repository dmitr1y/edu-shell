<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OfflineModules */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Offline Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offline-modules-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить модуль??',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            'win',
            'mac',
            'lin',
            'libs',
            'instruction:ntext',
            'url:ntext',
            'slug',
        ],
    ]) ?>

</div>
