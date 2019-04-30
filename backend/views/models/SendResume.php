<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "send_resume".
 *
 * @property integer $id
 * @property string $path
 * @property string $email
 * @property string $name
 * @property string $cover_letter
 * @property integer $date
 * @property integer $subject
 */
class SendResume extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'send_resume';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'name', 'cover_letter','subject'], 'required'],
            [['cover_letter','subject'], 'string'],
            [['email'], 'email'],
            [['date'], 'integer'],
            [['path', 'email', 'name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'email' => 'Email',
            'name' => 'Name',
            'subject' => 'Subject',
            'cover_letter' => 'Cover Letter',
            'date' => 'Date',
        ];
    }
}
