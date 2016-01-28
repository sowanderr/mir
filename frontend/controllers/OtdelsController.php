<?php
/**
 * Created by PhpStorm.
 * User: tolkushkin
 * Date: 28.01.16
 * Time: 14:24
 */

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Otdels;
use Yii;

class OtdelsController extends Controller
{
    public function actionIndex()
    {
        $query = Otdels::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $otdels = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $otdels,
            'pagination' => $pagination,
        ]);
    }
}