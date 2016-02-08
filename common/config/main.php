<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'ru-RU',
    'components' => [

            'sourceLanguage'=>'ru-RU',
            'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
