<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PppTable */
/* @var $form ActiveForm */
?>
<div class="ppp-table-mass">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name_s') ?>
        <?= $form->field($model, 'name_m') ?>
        <?= $form->field($model, 'name_o') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'ocenka') ?>
        <?= $form->field($model, 'com') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ppp-table-mass -->
