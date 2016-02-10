<?php
namespace backend\models;
use yii;
use yii\base\Model;
use yii\helpers\FileHelper;


class BgForm extends Model
{
    public $dir;
    public $value ;
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

         if ($model->load(Yii::$app->request->post())) {

             $this->value = '07.jpg';
             Yii::$app->session->setFlash(
                 'success',
                 'Спасибо за ваше Model BgForm.'
             );

                // делаем что-то, если форма прошла валидацию
                return true ;

        }
    }
    public function setDir(){
        $dir = './uploads';
        $s1 = array_slice(scandir($dir),2);
        $this->dir = $s1;
        return true;
    }


}