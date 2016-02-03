<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PppTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ppp Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppp-table-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ppp Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_oper',
            'name_s',
            'name_m',
            'name_o',
            'date',
            // 'ocenka',
            // 'com',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
