<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "home_page_visitor".
 *
 * @property integer $id
 * @property string $ip
 * @property string $connection
 * @property string $city
 * @property string $country
 * @property string $country_code
 * @property string $isp
 * @property string $lat
 * @property string $lon
 * @property string $org
 * @property string $region
 * @property string $region_name
 * @property string $status
 * @property string $timezone
 * @property string $zip
 * @property integer $date
 * @property integer $visits
 */
class HomePageVisitor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home_page_visitor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'connection', 'city', 'country', 'country_code', 'isp', 'lat', 'lon', 'org', 'region', 'region_name', 'status', 'timezone', 'zip', 'date', 'visits'], 'required'],
            [['date', 'visits'], 'integer'],
            [['ip', 'connection', 'city', 'country', 'country_code', 'isp', 'lat', 'lon', 'org', 'region', 'region_name', 'status', 'timezone', 'zip'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'connection' => 'Connection',
            'city' => 'City',
            'country' => 'Country',
            'country_code' => 'Country Code',
            'isp' => 'Isp',
            'lat' => 'Lat',
            'lon' => 'Lon',
            'org' => 'Org',
            'region' => 'Region',
            'region_name' => 'Region Name',
            'status' => 'Status',
            'timezone' => 'Timezone',
            'zip' => 'Zip',
            'date' => 'Date',
            'visits' => 'Visits',
        ];
    }
}
