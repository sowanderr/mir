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
    <div class="" style="background-image: url(<?php echo Url::to("uploads/$model->value")?>); background-color: #c7b39b; min-height: 200px; background-size: 100%; background-repeat: no-repeat; position: relative">
        <?php CKEditorInline::begin(['preset' => 'full']);?><div class="col-lg-2">
            <div><p id = layer1>
                basicsda

            <p id = layer2>
                basicsda
                </p>
                </div>
            <?php CKEditorInline::end();?>
             <style>
                #layer1, #layer2, #layer3, #layer4 {
                    position: relative; /* Относительное позиционирование */
                }
                #layer1, #layer3 {
                    font-size: 50px; /* Размер шрифта в пикселах */
                    color: #000080; /* Синий цвет текста */
                }
                #layer2, #layer4 {
                    top: -55px; /* Сдвигаем текст вверх */
                    left: 5px; /* Сдвигаем текст вправо */
                    color: #ffa500; /* Оранжевый цвет текста */
                    font-size:70px;  /* Размер шрифта в пикселах */
                }
                #layer1 { z-index: 2; }
                #layer2 { z-index: 1; }
                #layer3 { z-index: 3; }
                #layer4 { z-index: 4; }
            </style>>

            </div>
        </div>

    </div>


<?php
$m = ['0' => 'хуй','1'=>1 ];
var_dump($m);

?>

