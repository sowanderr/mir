<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gr_oprp".
 *
 * @property integer $id
 * @property string $name
 * @property string $com
 * @property integer $com2
 *
 * @property Otdels[] $otdels
 */
class GrOprp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gr_oprp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['com2'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['com'], 'string', 'max' => 255],
            [['com2'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'com' => 'дополнительное поле',
            'com2' => 'дополнительное поле2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOtdels()
    {
        return $this->hasMany(Otdels::className(), ['id_gr_oprp' => 'id']);
    }
}
