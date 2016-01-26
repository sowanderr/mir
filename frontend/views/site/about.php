<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

echo '<br>'. Yii::getAlias('@vendor') .'/adldap/adLDAP/src/adLDAP.php'.'<br>';



$adldap = \Yii::$app->ldap;


yii\base\Widget::widget();





$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

        <p>Не много о создателях:</p>
    <?php
    $result = $adldap->user()->infoCollection("tolkushkin", array("*"));
    echo "<br>";
    echo $result->displayName;
    echo "<br>";
    echo $result->title;
    echo "<br>";
    echo $result->department;
    echo "<br>";
    echo $result->mail;
    ?>

    <code><?= __FILE__ ?></code>
</div>
