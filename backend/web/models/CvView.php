<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cv_view".
 *
 * @property integer $id
 * @property string $security_key
 * @property integer $user_id
 * @property integer $type
 * @property integer $date
 */
class CvView extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cv_view';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'security_key', 'user_id', 'type', 'date'], 'required'],
            [['id', 'user_id', 'type', 'date'], 'integer'],
            [['security_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'security_key' => 'Security Key',
            'user_id' => 'User ID',
            'type' => 'Type',
            'date' => 'Date',
        ];
    }
}
