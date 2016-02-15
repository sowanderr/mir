<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

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
            echo '<div class="cke_button__radio_icon">';
            echo '<div class="col-sm-3"><a href="./uploads/'.$value.'">';
            echo '<IMG src="./uploads/' . $value . '" class = "img-thumbnail" WIDTH="50%" HEIGHT="50%" align="left" ;">';
            echo substr($value, -12); //сокращаем изображаемое название на 12 символов



            echo '</a></div>';
            echo $form->field($model, 'value[]')
              ->radio([
                 'value'=>$value
            ]);




            echo '</div>';
        }
        ?>
    
        <div class="site-bgform">
            <?= Html::submitButton('Поехали (как Гагарин)', ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="container" style="background-image: url(<?php echo Url::to("uploads/$model->value")?>); background-color: #c7b39b; min-height: 200px; background-size: 100%; background-repeat: no-repeat;">
            1123
        </div>

    <?php ActiveForm::end(); ?>
</div>

</div><!-- site-bgform -->
<?php
var_dump($model->value);
$s = ' ';

echo addcslashes('fo o[  ]', ' ');

?>

