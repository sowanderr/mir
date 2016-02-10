<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


?>
<div>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

<button class="btn btn-default">Загрузить</button>
<hr>

<?= Html::a('тык', ['pdf'], ['class' => 'btn btn-success']) ?>
<hr>

       <?php ActiveForm::end() ?>
</div>








