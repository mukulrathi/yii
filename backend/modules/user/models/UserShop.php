<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "user_shop".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $shop_name
 * @property integer $shop_category_id
 * @property string $start_time
* @property string $end_time
* @property integer $status
* @property string $deescription
* @property User $user
* @property integer $status
 * @property UserShopAddress $userShopAddress
 * @property UserShopOrders[] $userShopOrders
 * @property UserShopFileMapping[] $userShopFileMappings
 */
class UserShop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $shop_image;

    public static function tableName()
    {
        return 'user_shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [['user_id', 'shop_category_id', 'status', 'created_at', 'updated_at'], 'integer'],
             [['user_id', 'shop_category_id','status', 'created_at', 'updated_at'], 'integer'],
              [['shop_name', 'start_time', 'end_time'], 'string', 'max' => 255], 
                 [['deescription'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'shop_name' => 'Shop Name',
            'shop_category_id' => 'Shop Category ID',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'deescription' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status'    =>'Status'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserShopAddress()
    {
        return $this->hasOne(UserShopAddress::className(), ['shop_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserShopFileMappings()
    {
        return $this->hasMany(UserShopFileMapping::className(), ['shop_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserShopOrders()
    {
        return $this->hasMany(UserShopOrders::className(), ['shop_id' => 'id']);
    }

}
