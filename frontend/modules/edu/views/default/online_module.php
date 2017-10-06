<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


//var_dump($model); exit;

$this->title = $model['name'];
$this->params['breadcrumbs'][] = ['label' => 'Онлайн модули', 'url' => ['/modules']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="<?=$model->url?>">
    Ваш браузер не поддерживает IFrame.
</iframe>
</div>