<?php

namespace backend\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $company
 * @property string $position
 * @property string $query
 * @property string $email
 */
class contact extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'surname', 'company', 'position', 'query', 'email'], 'required'],
            [['name', 'surname', 'company', 'position', 'query', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'company' => 'Company',
            'position' => 'Position',
            'query' => 'Query',
            'email' => 'Email',
        ];
    }

    public function sendItEmail() {
        $data .= "Name : ".$this->name." ".$this->surname;
        $data .= "<br />";
        $data .= "Company :".$this->company;
        $data .= "<br />";
        $data .= "Position :".$this->position;
        $data .= "<br />";
        $data .= "Query :".$this->query;
        $data .= "<br />";
        $data .= "Email :".$this->email;
        mail("query@vupoint.ca", "Vupoint", $data);
    }

}
