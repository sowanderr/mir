<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditorInline;

/* @var $this yii\web\View */
/* @var $model backend\models\BgForm */
/* @var $form ActiveForm */
?>
<div class="site-bgform">

    <?php $form = ActiveForm::begin(); ?>
    <div>
        <?php

        $model->setDir();
        $model->BgForm();
        foreach ($model->dir as $value) {
            echo '<div>';
            echo '<div class="col-sm-3"><a href="./uploads/'.$value.'"><IMG src="./uploads/' . $value . '" class = "img" WIDTH="100%" HEIGHT="200px" align="left" >';

            //echo substr($value, -12); //сокращаем изображаемое название на 12 символов



            echo '</a>';
            echo $form->field($model, 'value[]')
              ->radio([
                 'value'=>$value
            ]);




            echo '</div>';
            echo '</div>';
        }
        ?>
    
        <div class="site-bgform">
            <?= Html::submitButton('Поехали (как Гагарин)', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>


</div>
</div><!-- site-bgform -->
    <div class="col-lg-12" style="background-image: url(<?php echo Url::to("uploads/$model->value")?>); background-color: #c7b39b; min-height: 200px; background-size: 100%; background-repeat: no-repeat; position: relative">
        <?php CKEditorInline::begin(['preset' => 'basic']);?><div class="col-lg-2">
            basic
        </div>
        <?php CKEditorInline::end();?>
    </div>


<?php
var_dump($model->value);

?>

