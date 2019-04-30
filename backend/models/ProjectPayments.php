<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project_payments".
 *
 * @property integer $id
 * @property integer $amount
 * @property string $comment
 * @property integer $date
 * @property integer $project_id
 */
class ProjectPayments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amount', 'comment', 'date', 'project_id'], 'required'],
            [['amount', 'date', 'project_id'], 'integer'],
            [['comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount' => 'Amount',
            'comment' => 'Comment',
            'date' => 'Date',
            'project_id' => 'Project ID',
        ];
    }
}
