<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OnlineModules */

$this->title = 'Update Online Modules: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Online Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->column_1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="online-modules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
