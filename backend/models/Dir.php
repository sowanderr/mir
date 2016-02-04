<?php
namespace backend\models;

use yii\base\Model;
use yii\helpers\FileHelper;


class Dir extends Model
{
public $dir;

    public function Show()
    {
        $this->dir = FileHelper::findFiles('/');
        return $this->dir;
    }
}