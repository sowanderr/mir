<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Created by PhpStorm.
 * User: tolkushkin
 * Date: 09.02.16
 * Time: 13:31
 */
$dir = './uploads';
$s1 = scandir($dir);
$s1 = array_slice($s1,2);
$s = '1';
$form = ActiveForm::begin([
    'id' => 'bg-form',
    'options' => ['class' => 'form-horizontal'],
]);
?><div>
    <?php
    foreach ($s1 as $value) {

    echo '<div class="col-lg-3"><a href="../web/uploads/'.$value.'">';
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
    echo '</div>';
}
//print_r($s1);
echo $model->value;
    //echo $model->checkboxList;

//echo  Html::submitButton('Установить фон', ['class' => 'btn btn-primary', 'name' => 'bg']);
 ?>
<button class="btn btn-default">Загрузить</button>


<? ActiveForm::end()  ?>
<div class="container-fluid" style="background-image: url(<?= Url::to("./uploads/$model->value")?>); background-repeat: repeat;">
    </div>
</div>