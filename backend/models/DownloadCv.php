<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "download_cv".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $date
 */
class DownloadCv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'download_cv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'date'], 'required'],
            [['user_id', 'date'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'date' => 'Date',
        ];
    }
}
