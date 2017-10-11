<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OnlineModules */

$this->title = 'Create Online Modules';
$this->params['breadcrumbs'][] = ['label' => 'Online Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="online-modules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
