<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PppTableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppp-table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_oper') ?>

    <?= $form->field($model, 'name_s') ?>

    <?= $form->field($model, 'name_m') ?>

    <?= $form->field($model, 'name_o') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'ocenka') ?>

    <?php // echo $form->field($model, 'com') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
