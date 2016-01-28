<?php
/**
 * Created by PhpStorm.
 * User: tolkushkin
 * Date: 28.01.16
 * Time: 14:18
 */
namespace app\models;

use yii\db\ActiveRecord;

class Otdels extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return 'otdels';
    }
}