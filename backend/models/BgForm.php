<?php
namespace backend\models;
use yii;
use yii\base\Model;
use yii\helpers\FileHelper;


class BgForm extends Model
{
    public $dir;
    public $value;
    public $value2;
    public function rules()
    {
        return [
           // [['checkboxList'], 'required'],
          [['value2'], 'required'],
        ];
    }
    public function BgForm()
    {



                // делаем что-то, если форма прошла валидацию



        return true ;
    }
    public function setDir(){
        $dir = './uploads';
        $s1 = array_slice(scandir($dir),2);
        $this->dir = $s1;
        return true;
    }


}