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
            <li><a href="/?r=site%2Fstrassen" title="Нажмите, чтобы перейти к модулю">Визуализатор
                    алгоритма Штрассена</a></li>
            <li><a href="/?r=site%2F1to1relations" title="Нажмите, чтобы перейти к модулю">Тренажёр
                    поиска
                    взаимно-однозначных соотношений</a></li>
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Замкнутые классы булевых-->
<!--                    функций</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Тренажёр на алгоритм Евклида и-->
<!--                    связанные с ним задачи</a></li>-->
            <li><a href="/?r=site%2Fdrawing_graph" title="Нажмите, чтобы перейти к модулю">Раскраска
                    графов</a></li>
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Автоматизированная система-->
<!--                    доказательства теоремы</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю">Сервис решения задач на-->
<!--                    тему-->
<!--                    булевых переменные</a></li>-->
            <li><a href="/?r=site%2Fhexplore" title="Нажмите, чтобы перейти к модулю">Игра
                    HEXPLORE</a></li>
            <li><a href="/?r=site%2Fgraph_tasks" title="Нажмите, чтобы перейти к модулю">Система
                    для поддержки задач для работы с графами</a></li>
            <li><a href="/?r=site%2Fbiginteger" class="collection-item">Система
                    компьютерной алгебры</a></li>
        </ul>

        <h3>Оффлайн модули</h3>
    <ul class="nav nav-tabs nav-stacked">
    <?php
    for ($i=0;$i<$modules_count;$i++){
        echo "<li><a href=\"/modules/offline/".\app\models\OfflineModules::translit($module[$i]->name)."\" title=\"Нажмите, чтобы перейти к модулю\">".$module[$i]->name."</a></li>";
    }
    ?>
    </ul>
</div>
