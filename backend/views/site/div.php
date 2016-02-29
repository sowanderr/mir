<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditorInline;
use yii\widgets\Pjax;
use backend\models\ShablonForm;

$model->setDir();
$model->bgForm();

?>
<div style="width:100%;height:100%; z-index:1; padding-right: 100px; background-image: url(<?php echo Url::to("uploads/$model->value")?>); background-color: #c7b39b; min-height: <?= Html::encode($model->min)?>px; background-size: 100%; background-repeat: no-repeat; ">
    <?php CKEditorInline::begin(['preset' => 'full']);?>
    <?php



    for($a=1;$a<=$model->divn;$a++) {
        echo $model->div;
    }
    ?>

    <?php CKEditorInline::end();?>

</div>
