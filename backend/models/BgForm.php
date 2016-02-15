<?php
namespace backend\models;
use yii;
use yii\base\Model;



class BgForm extends Model
{
    public $dir;
    public $value;
    public function rules()
    {
        return [
            [['value'], 'required'],

        ];
    }
    public function BgForm()
    {
       $this->value = array_shift(array_reverse(array_unique($this->value))); // оставляем уникальные значения масива, переварачиваем, извлекаем первый.

        return true ;
    }
    public function setDir(){
        $dir = './uploads';
        $s1 = array_slice(scandir($dir),2);
        $this->dir = $s1;
        return true;
    }


}