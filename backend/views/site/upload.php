<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>
<?= Html::a('тык', ['pdf'], ['class' => 'btn btn-success']) ?>
