<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$params = array_merge(
        require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

$config = [
    'name' => 'Yii2 Basic Template',
    'language' => 'es',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'maintenanceMode', 'assetsAutoCompress'],
    'components' => [
        'maintenanceMode' => [
            'class' => 'brussens\maintenance\MaintenanceMode',
            'enabled' => false,
            // Show title
            'title' => 'this site is under maintenance',
            // Show message
            'message' => 'Sorry, perform technical works.',
        ],
        'assetsAutoCompress' =>
        [
            'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest', 'user'],
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
        ],
        'cache' => [
            'class' => 'yii\caching\ArrayCache',
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
        'db' => [
            'class' => 'yii\db\Connection',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                ],
            ],
        ],
    ],
    'params' => $params,
];

return $config;
