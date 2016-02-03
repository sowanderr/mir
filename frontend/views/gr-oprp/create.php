<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GrOprp */

$this->title = 'Create Gr Oprp';
$this->params['breadcrumbs'][] = ['label' => 'Gr Oprps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gr-oprp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
