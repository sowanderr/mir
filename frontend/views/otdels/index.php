<?php
/**
 * Created by PhpStorm.
 * User: tolkushkin
 * Date: 28.01.16
 * Time: 14:28
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Отделы</h1>
    <ul>
        <?php foreach ($otdels as $otdel): ?>
            <li>
                <?= Html::encode("{$otdel->name} ({$otdels->id})") ?>:
                <?= $otdels->long_name ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>