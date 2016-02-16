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

        <?= Html::a('тык', ['bg'], ['class' => 'btn btn-success']) ?>
</div>
</div><!-- site-bgform -->
    <div class="col-lg-12" style="width:100%;height:100%; z-index:1; padding-right: 100px; background-image: url(<?php echo Url::to("uploads/$model->value")?>); background-color: #c7b39b; min-height: 200px; background-size: 100%; background-repeat: no-repeat; position:relative;">
        <?php CKEditorInline::begin(['preset' => 'full']);?>
            <div class="col-lg-4" style="width:700px;height:100px;position:absolute;background-color:yellow;top:80px;left:80px;z-index:2;opacity:0.5;border:1px solid #333333;">
                <p style="position: inherit">basicsda
                basicsda
</p>
                </div>
            <div  class="col-lg-4" style="width:900px;height:200px;position:absolute;background-color:yellow;top:80px;left:80px;z-index:3;opacity:0.5;border:1px solid #333333;">
            <p style="position: inherit">asda</p>
            </div>
        <?php// include div ?>
            <?php CKEditorInline::end();?>

            </div>





<?php
$m = ['0' => 'хуй','1'=>1 ];
var_dump($m);

?>

