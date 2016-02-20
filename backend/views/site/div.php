<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditorInline;
use yii\widgets\Pjax;
use backend\models\ShablonForm;

$model->setDir();
$model->bgForm();
foreach ($model->dir as $value) {
    echo '<div>';
    echo '<div class="col-sm-3"><a href="./uploads/'.$value.'"><IMG src="./uploads/' . $value . '" class = "img" WIDTH="100%" HEIGHT="200px" align="left" >';

    //echo substr($value, -12); //сокращаем изображаемое название на 12 символов

 $form = ActiveForm::begin(['options' => [
    'data-pjax' => '1'
],
    'id' => 'shablonform'
]);

    echo '</a>';
    echo $form->field($model, 'value[]')
        ->radio([
            'value'=>$value
        ]);
    echo '</div>';
    echo '</div>';
}
?>
<div class="col-lg-12" style="width:100%;height:100%; z-index:1; padding-right: 100px; background-image: url(<?php echo Url::to("uploads/$model->value")?>); background-color: #c7b39b; min-height: <?= Html::encode($model->min)?>px; background-size: 100%; background-repeat: no-repeat; ">
    <?php CKEditorInline::begin(['preset' => 'full']);?>
    <?php



    for($a=1;$a<=$model->divn;$a++) {
        echo $model->div;
    }
    ?>

    <?php CKEditorInline::end();?>

</div>
<?php ActiveForm::end(); ?>