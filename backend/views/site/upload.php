<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>
<div class="container-fluid" style="background-image: url(http://grandwallpapers.net/photo/znak-alyansa-world-of-warcraft-1920x1200.jpg); background-repeat: repeat;">
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

<button class="btn btn-default">Загрузить</button>
<hr>
<?= Html::a('тык', ['pdf'], ['class' => 'btn btn-success']) ?>
<hr>
<?php
$dir = './uploads';
$s1 = scandir($dir);
$s1 = array_slice($s1,2);

foreach ($s1 as $value) {

       echo '<div class="col-sm-2"><a href="./uploads/'.$value.'">';
       echo '<IMG src="./uploads/' . $value . '" class = "img-thumbnail" WIDTH="70%" HEIGHT="70%" align="left" ;">';
       echo substr($value, -12);

       echo '<div class="checkbox">';

       echo '</a></div>';
       echo '<label><input type="checkbox" value="'.$value.'">фон</label></div>' ;


}
print_r($s1);

echo  Html::submitButton('Установить фон', ['class' => 'btn btn-primary', 'name' => 'contact-button']);
?>


<?php ActiveForm::end() ?>


    </div>
