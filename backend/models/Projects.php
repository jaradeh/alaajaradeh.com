<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $link
 * @property integer $start_date
 * @property integer $end_date
 * @property string $image
 * @property integer $cost
 * @property string $comments
 * @property integer $category_id
 * @property integer $status
 */
class Projects extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'description', 'start_date', 'end_date', 'cost', 'comments', 'category_id', 'status'], 'required'],
            [['description', 'comments', 'link','slug'], 'string'],
            [['cost', 'status'], 'integer'],
            [['name', 'image'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png ,jpeg ,jpg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'link' => 'Link',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'image' => 'Image',
            'cost' => 'Cost',
            'comments' => 'Comments',
            'category_id' => 'Category ID',
            'status' => 'Status',
        ];
    }

}
