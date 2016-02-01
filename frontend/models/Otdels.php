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
 * @property integer $id_gr_oprp
 *
 * @property GrOprp $idGrOprp
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
            [['name', 'long_name', 'id_gr_oprp'], 'required'],
            [['status', 'tehpol', 'id_gr_oprp'], 'integer'],
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
            'name' => 'Название',
            'long_name' => 'Полное наименование',
            'status' => 'Статус',
            'tehpol' => 'Техническое поле',
            'update_time' => 'Время обновления',
            'id_gr_oprp' => 'id, группы (ОПРП)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGrOprp()
    {
        return $this->hasOne(GrOprp::className(), ['id' => 'id_gr_oprp']);
    }
}
