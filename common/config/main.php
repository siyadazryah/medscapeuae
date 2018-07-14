<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'SetValues' => [
            'class' => 'common\components\SetValues'
        ],
        'UploadFile' => [
            'class' => 'common\components\UploadFile'
        ],
        'EncryptDecrypt' => [
            'class' => 'common\components\EncryptDecrypt'
        ],
        'NumToWord' => [
            'class' => 'common\components\NumToWord'
        ],
        'MenuHeader' => [
            'class' => 'common\components\MenuHeaderWidget'
        ],
        'ServiceLeftMenu' => [
            'class' => 'common\components\ServiceLeftMenuWidget'
        ],
    ],
];
