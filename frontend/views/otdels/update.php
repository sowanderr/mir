<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Otdels */

$this->title = 'Обновить Отдел: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Otdels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="otdels-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
