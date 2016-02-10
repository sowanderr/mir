<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BgForm */
/* @var $form ActiveForm */
?>
<div class="site-bgform">

    <?php $form = ActiveForm::begin(); ?>
    <div>
        <?php
        foreach ($model->dir as $value) {

            echo '<div class="col-lg-3"><a href="../web/uploads/'.$value.'">';
            echo '<IMG src="./uploads/' . $value . '" class = "img-thumbnail" WIDTH="70%" HEIGHT="70%" align="left" ;">';
            echo substr($value, -12);

            echo '<div class="checkbox">';

            echo '</a></div>';
            echo '<label><input type="checkbox" value="'.$value.'">фон</label></div>' ;
            echo $form->field($model, 'value')
              ->radioList([
                $value=>$s,
            ]);

            //echo Html::a('Зафонить', ['sbg'], ['class' => 'btn btn-success']);
            echo '</div>';
        }?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-bgform -->
