<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OfflineModules */

$this->title = 'Create Offline Modules';
$this->params['breadcrumbs'][] = ['label' => 'Offline Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offline-modules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
