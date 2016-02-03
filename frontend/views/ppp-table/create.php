<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PppTable */

$this->title = 'Create Ppp Table';
$this->params['breadcrumbs'][] = ['label' => 'Ppp Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ppp-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
