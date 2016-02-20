<?php
/**
 * Created by PhpStorm.
 * User: tolkushkin
 * Date: 19.02.16
 * Time: 16:44
 */
namespace backend\models;
use yii;
use yii\base\Model;




class ShablonForm extends Model
{
    public $dir;
    public $value= [];
    public $min = 900;
    public $div = '<div class="col-lg-4" style="width:100px;height:100px;position:absolute;top:80px;left:80px;z-index:100;opacity:1;"><p style="position: inherit;">новый</p>';
    public $divn = 1;

    public function rules()
    {
        return [
            [['value', 'min', 'divn'], 'required'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'value' => '',
            'min' => 'Высота фона в px',
            'divn' => 'Количество блоков',
        ];
    }

    public function setDir(){
        $dir = './uploads';
        $s1 = array_slice(scandir($dir),2);
        $this->dir = $s1;
        return true;
    }
    public function BgForm()
    {

        $this->value = array_shift(array_reverse(array_unique($this->value))); // оставляем уникальные значения масива, переварачиваем, извлекаем первый. + экранируем от пробелов
        $this->value =  addcslashes($this->value, ' ');

        return true ;
    }


}