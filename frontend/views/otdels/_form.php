<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Otdels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otdels-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'long_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Не активен',
        '1' => 'Активен'
    ]) ?>
    <?//= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'tehpol')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>
    <?= $form->field($model, 'id_gr_oprp')->dropDownList(
        ArrayHelper::map($idoprp, 'id', 'name')
    ) ?>
    <?//= $form->field($model, 'id_gr_oprp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Oбновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

