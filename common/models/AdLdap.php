<?php
require Yii::getAlias('@vendor') .'/adldap/adLDAP/src/adLDAP.php';
use Adldap\Adldap;

$configuration = array(
    'user_id_key' => 'samaccountname',
    'account_suffix' => '@zav.mir',
    'person_filter' => array('category' => 'objectCategory', 'person' => 'person'),
    'base_dn' => 'DC=ZAV,DC=MIR',
    'domain_controllers' => array('mirupr1.zav.mir', 'mirupr2.zav.mir'),
    'admin_username' => 'tolkushkin',
    'admin_password' => 'dazik571882',
    'real_primarygroup' => true,
    'use_ssl' => false,
    'use_tls' => false,
    'recursive_groups' => true,
    'ad_port' => '389',
    'sso' => false,
);

try
{
    $ad = new Adldap($configuration);

    echo "Awesome, we're connected!";
} catch(AdldapException $e)
{
    echo "Uh oh, looks like we had an issue trying to connect: $e";
}
