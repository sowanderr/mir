<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Otdels */

$this->title = 'Добавить отдел';
$this->params['breadcrumbs'][] = ['label' => 'Отделы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-6">
<div class="otdels-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'idoprp' => $idoprp,
    ]) ?>

</div>
</div>