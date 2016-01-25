<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

echo '<br>'. Yii::getAlias('@vendor') .'/adldap/adLDAP/src/adLDAP.php'.'<br>';
$a = 'антон '.'<br>';
base64_encode($a);
echo '<br>';
echo $a;
echo base64_decode($a);
echo $a;
require Yii::getAlias('@vendor') .'/adldap/adLDAP/src/adLDAP.php';
use yii\base\Component;
use adldap\adLDAP;

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
    $ad = new \adLDAP($configuration);

    echo "Awesome, we're connected!";
} catch(AdldapException $e)
{
    echo "Uh oh, looks like we had an issue trying to connect: $e";
}

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
