<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <button class="btn btn-default">Загрузить</button>
<hr>
<?= Html::a('тык', ['pdf'], ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>

