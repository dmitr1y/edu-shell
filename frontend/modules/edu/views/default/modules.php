<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Модули';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>
    <h3>Онлайн модули</h3>
        <ul class="nav nav-tabs nav-stacked">
            <?php
            for ($i=0;$i<$online_count;$i++){
                echo "<li><a href=\"/modules/online/".$online_modules[$i]->slug.
                    "\" title=\"Нажмите, чтобы перейти к модулю\">".$online_modules[$i]->name."</a></li>";
            }
            ?>
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Замкнутые классы булевых-->
<!--                    функций</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Тренажёр на алгоритм Евклида и-->
<!--                    связанные с ним задачи</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Автоматизированная система-->
<!--                    доказательства теоремы</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Сервис решения задач на-->
<!--                    тему-->
<!--                    булевых переменные</a></li>-->
        </ul>

        <h3>Оффлайн модули</h3>
    <ul class="nav nav-tabs nav-stacked">
    <?php
    for ($i=0;$i<$offline_count;$i++){
        echo "<li><a href=\"/modules/offline/".$offline_modules[$i]->slug.
            "\" title=\"Нажмите, чтобы перейти к модулю\">".$offline_modules[$i]->name."</a></li>";
    }
    ?>
    </ul>
</div>
