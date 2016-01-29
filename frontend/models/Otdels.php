<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "otdels".
 *
 * @property integer $id
 * @property string $name
 * @property string $long_name
 * @property integer $status
 * @property integer $tehpol
 * @property string $update_time
 */
class Otdels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otdels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'long_name'], 'required'],
            [['status', 'tehpol'], 'integer'],
            [['update_time'], 'safe'],
            [['name', 'long_name'], 'string', 'max' => 255],
            [['long_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'long_name' => 'Long Name',
            'status' => 'Status',
            'tehpol' => 'Tehpol',
            'update_time' => 'Update Time',
        ];
    }
}
