<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "visits".
 *
 * @property integer $id
 * @property integer $ip_id
 * @property integer $date
 */
class Visits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip_id', 'date'], 'required'],
            [['ip_id', 'date'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip_id' => 'Ip ID',
            'date' => 'Date',
        ];
    }
}
