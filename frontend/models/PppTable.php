<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ppp_table".
 *
 * @property integer $id_oper
 * @property string $name_s
 * @property string $name_m
 * @property string $name_o
 * @property string $date
 * @property double $ocenka
 * @property integer $com
 */
class PppTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ppp_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_s', 'name_m', 'name_o'], 'required'],
            [['date'], 'safe'],
            [['ocenka'], 'number'],
            [['com'], 'integer'],
            [['name_s', 'name_o'], 'string', 'max' => 100],
            [['name_m'], 'string', 'max' => 33]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_oper' => 'Номер операции',
            'name_s' => 'Имя сотрудника',
            'name_m' => 'Месяц',
            'name_o' => 'Отдел',
            'date' => 'Дата редактирования',
            'ocenka' => 'Оценка',
            'com' => 'Техническое поле',
        ];
    }

}
