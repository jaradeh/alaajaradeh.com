<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project_images".
 *
 * @property integer $id
 * @property string $image
 * @property integer $project_id
 */
class ProjectImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'project_id'], 'required'],
            [['project_id'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'project_id' => 'Project ID',
        ];
    }
}
