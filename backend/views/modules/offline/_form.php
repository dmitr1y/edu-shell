<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OfflineModules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="offline-modules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'win')->textInput() ?>

    <?= $form->field($model, 'mac')->textInput() ?>

    <?= $form->field($model, 'lin')->textInput() ?>

    <?= $form->field($model, 'libs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instruction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
