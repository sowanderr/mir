<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PppTable */

$this->title = 'Update Ppp Table: ' . ' ' . $model->id_oper;
$this->params['breadcrumbs'][] = ['label' => 'Ppp Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_oper, 'url' => ['view', 'id' => $model->id_oper]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ppp-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
