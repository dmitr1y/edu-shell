<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Модули';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>
    <h3>Онлайн модули</h3>

<!--    <div class="modules">-->
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
//var_dump($module[0]->name);
//var_dump($modules_count);
//echo $modules_count;
//exit;

    for ($i=0;$i<$modules_count;$i++){
        echo "<li><a href=\"/modules/protocolvisualizer\" title=\"Нажмите, чтобы перейти к модулю\">".$module[$i]->name."</a></li>";
    }
    ?>
    </ul>
<!--        <ul class="nav nav-tabs nav-stacked">-->
<!--            <li><a href="/?r=site%2Fprotocolvisualizer" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/ProtocolVisualizer/')">Визуализатор-->
<!--                    протоколов</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/wisetask/')">Самопроверяемые-->
<!--                    задачи по комбинаторике</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/AltExam-v1.0/')">Рработа-->
<!--                    с-->
<!--                    длинными числами</a></li>-->
<!--            <!--                    Компьютерная система для работы с длинными числами, представленными своими остатками-->-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Ant-Algo/')">Визуализация-->
<!--                    решения задачи-->
<!--                    Коммивояжера </a></li>-->
<!--            <!--                    Визуализация решения задачи Коммивояжера с помощью муравьиного алгоритма-->-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/BernsideTheorem/')">Вычисление-->
<!--                    всех геометрически-->
<!--                    различных раскрасок</a></li>-->
<!--            <!-- Вычисление всех геометрически различных раскрасок правильных многогранников/многоугольников с использованием Теоремы Бернсайда -->-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/DM-alt_exam-2016-spies/')">Программная-->
<!--                    реализация задачи День рождения Шерил</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/lastV/')">Алгоритм-->
<!--                    возведения числа в многоступенчатую степень по модулю</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Machine_Experiment/')">Машинный-->
<!--                    эксперимент по расчету наименьшего простого нечетного делителя для биномиального-->
<!--                    коэффициента</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/PolynomFactorization/')">Факторизация-->
<!--                    полиномов с целыми коэффициентами</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/RSAsys/')">Генерация-->
<!--                    больших простых чисел</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Additivnye-cepochki/')">Аддитивные-->
<!--                    цепочки</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/ALGORITM-RABOTY-JELEKTRONNYX-PLATEZHEJ/')">Алгоритм-->
<!--                    работы электронных платежей</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Bakaljar-faktorizacija')">Бакаляр-->
<!--                    факторизация</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Murav\'inyj-algoritm/')">Муравьиный-->
<!--                    алгоритм</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/ustnyj-schet/')">Устный-->
<!--                    счет</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/GENERACIJA_BOL\'SHIX_PROSTYX_CHISEL/')">Генерация-->
<!--                    больших простых чисел</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/crypto-protocol/')">Визуализация-->
<!--                    криптосистемы с открытым ключом</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Biometricheskaja_identifikacija_lichnosti_po_golosu/')">Биометрическая-->
<!--                    идентификация личности по голосу</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/razlozhenie_kvadrata_natural\'nogo_chisla_v_cepnuju_drob\'/')">Разложение-->
<!--                    квадрата натурального числа в цепную дробь</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Alt/')">Инструмент-->
<!--                    для-->
<!--                    исследования языка, который задает данная КС-грамматика</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Alt-ISeeStars/')">Применение-->
<!--                    нечеткой логики к задачам распознавания</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/cellular__automat/')">Программа-->
<!--                    “Клеточный автомат”</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Pre-Release/')">Применение-->
<!--                    нечёткой логики для анализа результатов тестирования</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Algoritm_DPLL/')">Алгоритм-->
<!--                    DPLL</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Programma_dlja_vyrazhenija_kon`junkcii_cherez_konechnyj_nabor_bulevyx_funkcij/')">Программа-->
<!--                    для выражения конъюнкции через конечный набор булевых функций</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Reguljarnye_vyrazhenija/')">Регулярные-->
<!--                    выражения</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--               forDownload/Samoproverjaemye_zadachi_po_logike/')">Самопроверяемые-->
<!--                задачи по логике</a></li>-->
<!--            <!--18.06.17-->-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Algoritm_Berlekjempa/')">Применение-->
<!--                    нечеткой логики к задачам распознавания</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Algoritm_Millera/')">Алгоритм-->
<!--                    Миллера</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Algoritmy_diskretnogo_logarifmirovanija/')">Алгоритмы-->
<!--                    дискретного логарифмирования</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Faktorizacija_chisla_ro-metodom_Pollarda/')">Факторизация-->
<!--                    числа ро-методом Полларда</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Generacija_grafov_Vragi_v_raznyx_komnatax/')">Генерация-->
<!--                    графов «Враги в разных комнатах»</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Issledovanie_jevoljucionnogo_processa_belkov/')">Исследование-->
<!--                    эволюционного процесса белков</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Issledovat\'_diametry_reguljarnyx_svjaznyx_grafov/')">Исследование-->
<!--                    эволюционного процесса белков</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Meandry/')">Меандры</a>-->
<!--            </li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Naxozhdenie_komponent_dvusvjaznosti_grafa/')">Нахождение-->
<!--                    компонент двусвязности графа</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Optimal\'nye_alfavitnye_derev\'ja/')">Реализация-->
<!--                    алгоритов Ху—Таккера и-->
<!--                    Гарсия—Уочса для построения-->
<!--                    оптимальных алфавитных деревьев</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Parallel\'nyj_algoritm_Boruvki/')">Параллельная-->
<!--                    реализация алгоритмов Борувки и Дейкстры</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Perechislenie_vsex_razbienij_na_pary_mnozhestva/')">Перечисление-->
<!--                    всех разбиений на пары множества из-->
<!--                    2n элементов с учетом геометрических особенностей-->
<!--                    расположения элементов</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Podschjot_verojatnostej_v_pokere/')">Подсчёт-->
<!--                    вероятностей в-->
<!--                    покере</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Postroenie_bazy_nerazlozhimyx_mnogochlenov/')">Построение-->
<!--                    базы неразложимых-->
<!--                    многочленов</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/Primenenie_algoritmov_dlja_potokov_v_setjax_k_raschetu_peremesh\'nija_studentov/')">Применение-->
<!--                    теории потоков в графах-->
<!--                    для расчета маршрутов движения-->
<!--                    студентов</a></li>-->
<!--            <li><a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->
<!--                   forDownload/vydelenie_klasterov_(soobsh\'estv)_v_grafe/')">Выделение-->
<!--                    сообществ в графе</a></li>-->
<!--            <!--<a href="/?r=site%2F" title="Нажмите, чтобы перейти к модулю"-->-->
<!--            <!--forDownload/Zakladka_figur_domino/')"> </a>-->-->
<!--        </ul>-->
<!--    </div>-->


</div>
