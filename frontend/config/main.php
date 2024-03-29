<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
//        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'main-edu',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                'modules' => 'edu/default/index',
                'modules/offline/<slug>' => 'edu/default/offline',
                'modules/online/<slug>' => 'edu/default/online',
                'lectures/<action>' => 'lectures/default/<action>',
                'lectures' => 'lectures/default/index',
                'news' => 'news/index',
                'news/<slug>' => 'news/posts',
                '' => 'site/index',
                'login' => '/user-management/auth/login',
                'logout' => '/user-management/auth/logout',
                'registration' => '/user-management/auth/registration',
                'change-own-password' => '/user-management/auth/password-recovery',
                'confirm-email' => '/user-management/auth/confirm-email',
                '<action>' => 'site/<action>',
                [
                    'pattern' => '<controller>/<action>',
                    'route' => '<controller>/<action>',
                    'suffix' => ''
                ],
                [
                    'pattern' => '<module>/<controller>/<action>',
                    'route' => '<module>/<controller>/<action>',
                    'suffix' => ''
                ],
            ],
        ],
//        'authManager' => [
//            'class' => 'yii\rbac\DbManager',
//        ],
        'db' => require('db.php'),
    ],
    'modules' => [
        'edu' => [
            'class' => 'app\modules\edu\EduModule',
        ],
        'lectures' => [
            'class' => 'app\modules\lectures\LecturesModule',
        ],
    ],
    'params' => $params,
];
