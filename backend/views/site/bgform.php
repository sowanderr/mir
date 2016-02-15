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
        $s = 1;
        $model->setDir();
        $model->BgForm();
        $m = $model->dir;
        foreach ($m as $value) {

            echo '<div class="col-sm-3"><a href="./uploads/'.$value.'">';
            echo '<IMG src="./uploads/' . $value . '" class = "img-thumbnail" WIDTH="70%" HEIGHT="70%" align="left" ;">';
            echo substr($value, -12);

            echo '<div class="checkbox">';

            echo '</a></div>';
            //echo '<label><input type="checkbox" value="'.$value.'">фон</label></div>' ;
            echo $form->field($model, 'value')
              ->radioList([
                $value=>$s,
            ]);


            //echo Html::a('Зафонить', ['sbg'], ['class' => 'btn btn-success']);
           $s++;
            echo '</div>';
        }
        echo $form->field($model, 'value2')
            ->textInput();
        ?>
    
        <div class="form-group">
            <?= Html::submitButton('Bg', ['class' => 'btn btn-success']) ?>
        </div>
        <div class="container-fluid" style="background-image: url(<?php echo Url::to("./uploads/$value")?>); ">
        </div>
    <?php ActiveForm::end(); ?>
</div>

</div><!-- site-bgform -->
<?php var_dump($model->value2);
var_dump($model->value);


?>

