<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PppTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppp-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_s')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_m')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_o')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'ocenka')->textInput() ?>

    <?= $form->field($model, 'com')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
