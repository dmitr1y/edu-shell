<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use webvimark\modules\UserManagement\components\GhostNav;
use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Edu modules',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {
//        check admin permissions
//        if (Yii::$app->user->can('viewAdmin')) {
            $menuItems = [
                [
                    'label' => 'Модули',
                    'items' => [
                        ['label' => 'Офллайн модули', 'url' => '/modules/offline'],
                        ['label' => 'Онлайн модули', 'url' => '/modules/online'],
                    ],
                ],
                ['label' => 'Пользователи',
                    'items' => [['label' => UserManagementModule::t('back', 'Users'), 'url' => ['/user-management/user/index']],
                    ['label' => UserManagementModule::t('back', 'Roles'), 'url' => ['/user-management/role/index']],
                    ['label' => UserManagementModule::t('back', 'Permissions'), 'url' => ['/user-management/permission/index']],
                    ['label' => UserManagementModule::t('back', 'Permission groups'), 'url' => ['/user-management/auth-item-group/index']],
                    ['label' => UserManagementModule::t('back', 'Visit log'), 'url' => ['/user-management/user-visit-log/index']],
                    ]],
                ['label' => 'Новости', 'url' => ['/news']],

            ];

//        }
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo GhostNav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'homeLink' => ['label' => 'Главная', 'url' => ['site/index']],
        ]); ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Edu modules <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
