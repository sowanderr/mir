<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OtdelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отделы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otdels-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить Отдел', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'long_name',
            'status',
            'tehpol',
            'update_time',
            'id_gr_oprp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
