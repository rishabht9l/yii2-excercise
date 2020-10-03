<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "router".
 *
 * @property int $id
 * @property string $sap_id
 * @property string $hostname
 * @property string $loopback
 * @property string $mac_address
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Router extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    const STATUS_DELETED = 10;

    public static function tableName()
    {
        return 'router';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sap_id', 'hostname', 'loopback', 'mac_address'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['sap_id'], 'string', 'max' => 18, 'min' => 18],
            [['hostname'], 'string', 'max' => 14, 'min' => 14],
            [['loopback', 'mac_address'], 'string', 'max' => 32],
            [['sap_id'], 'unique'],
            [['hostname'], 'unique'],
            [['loopback'], 'unique'],
            [['mac_address'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sap_id' => 'Sap ID',
            'hostname' => 'Hostname',
            'loopback' => 'Loopback',
            'mac_address' => 'Mac Address',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public static function createAlphaNumericKey($length){
        $str_options = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle($str_options),0, $length);
    }

    public static function createLoopBack(){
        return rand(111, 999).'.'. rand(111, 999).'.'. rand(11, 99).'.'. rand(11, 99);
    }

    public static function macAddress(){
       return self::createAlphaNumericKey(2).':'. self::createAlphaNumericKey(2).':'. self::createAlphaNumericKey(2).':'. self::createAlphaNumericKey(2).':'.self::createAlphaNumericKey(2). ':'.self::createAlphaNumericKey(2) ;
    }
}
