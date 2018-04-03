<?php

$config = [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=;dbname=bjj_tournament_prod',
            'username' => 'root',
            'password' => '',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
    ],
];

return $config;
