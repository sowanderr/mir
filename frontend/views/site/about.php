<?php

/* @var $this yii\web\View */



require Yii::getAlias('@vendor') .'/adldap/adLDAP/src/adLDAP.php';



$adldap = \Yii::$app->ldap;


yii\base\Widget::widget();





$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

        <p>Не много о создателях:</p>
    <?php
    if (!\Yii::$app->user->isGuest) {
        $result = $adldap->user()->infoCollection(Yii::$app->user->identity->username, array("*"));
        echo "<br>";
        echo $result->displayName;
        echo "<br>";
        echo $result->title;
        echo "<br>";
        echo $result->mail;
        echo "<br>";
        echo $result->department;
        echo "<br>";
        echo $result->samaccountname;
        echo "<br>";
    }

    ?>

    <code><?= __FILE__ ?></code>
</div>
