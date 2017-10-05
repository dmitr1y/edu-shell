<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $model['name'];
$this->params['breadcrumbs'][] = ['label' => 'Модули', 'url' => ['/modules']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1><?= Html::encode($this->title)?></h1>

    <p>
        <?=$model['description']?>
    </p>

    <p>
        Системные требования: <?php
            if ($model['win'])
                echo 'Windows ';
        if ($model['lin'])
            echo 'Linux';
        if ($model['mac'])
            echo 'Mac OS';
        ?>
    </p>

    <p>
        <h3>Инструкция по запуску модуля</h3>
        <?=$model['instruction']?>
    </p>

    <p> <a href="<?=$model['url']?>" class="btn btn-default">Скачать модуль</a> </p>
</div>
