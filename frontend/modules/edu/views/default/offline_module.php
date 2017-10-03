<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $edu_module->getName();
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1><?= Html::encode($this->title)?></h1>

    <p>
        <?=$edu_module->getDescription()?>
    </p>

    <p>
        Системные требования: <?php
        $systems=$edu_module->getSys();
        if ($systems['win'])
            echo "Windows ";
        if ($systems['lin'])
            echo "Linux";
        if ($systems['mac'])
            echo "Mas OS ";
        ?>
    </p>

    <p>
        <h3>Инструкция по запуску модуля</h3>
        <?=$edu_module->getHowTo();?>
    </p>

    <p> <a href="<?=$edu_module->getLink()?>" class="btn btn-default">Скачать модуль</a> </p>
</div>
