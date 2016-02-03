<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PppTable */

$this->title = $model->id_oper;
$this->params['breadcrumbs'][] = ['label' => 'Ppp Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppp-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_oper], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_oper], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_oper',
            'name_s',
            'name_m',
            'name_o',
            'date',
            'ocenka',
            'com',
        ],
    ]) ?>

</div>
