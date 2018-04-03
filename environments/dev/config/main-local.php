<?php

$config = [
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
            'writeCallback' => function($session) {
                return [
                    'user_id' => Yii::$app->user->id
                ];
            }
        // 'db' => 'mydb',  // the application component ID of the DB connection. Defaults to 'db'.
        // 'sessionTable' => 'my_session', // session table name. Defaults to 'session'.
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => [@$_SERVER['REMOTE_ADDR'], '127.0.0.1', '::1'],
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => [@$_SERVER['REMOTE_ADDR'], '127.0.0.1', '::1'],
        'generators' => [
            'enumerable' => [
                'class' => 'yii2mod\gii\enum\Generator',
            ],
            'crud' => [
                'class' => 'yii2mod\gii\crud\Generator',
            ],
        ],
    ];
}

return $config;
