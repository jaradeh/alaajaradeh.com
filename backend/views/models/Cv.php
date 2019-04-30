<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cv".
 *
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property integer $date
 */
class Cv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id', 'date'], 'integer'],
            [['name', 'path'], 'string', 'max' => 255],
            [['path'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf', 'maxFiles' => 1],
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
            'path' => 'Path',
            'date' => 'Date',
        ];
    }
}
