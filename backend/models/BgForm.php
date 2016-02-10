<?php
namespace backend\models;
use yii;
use yii\base\Model;
use yii\helpers\FileHelper;


class BgForm extends Model
{
    public $checkboxList;
    public $value = '08.jpg';
    public function rules()
    {
        return [
           // [['checkboxList'], 'required'],
           //[['value'], 'required'],
        ];
    }
    public function bg()
    {
        $model = new BgForm();
        $this->value = $model->value;
         if ($model->load(Yii::$app->request->post('BgForm[value]'))) {

             $this->value = '07.jpg';
                // делаем что-то, если форма прошла валидацию
                return true ;

        }
    }


}