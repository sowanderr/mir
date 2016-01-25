<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'ldap' => [
            'class'=>'Edvlerblog\Ldap',
            'options'=> [
                'ad_port'      => 389,
                'domain_controllers'    => array('mirupr1','mirupr2'),
                'account_suffix' =>  '@zav.mir',
                'base_dn' => "DC=ZAV,DC=MIR",
                // for basic functionality this could be a standard, non privileged domain user (required)
                'admin_username' => 'tolkushkin',
                'admin_password' => 'dazik571882'
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
