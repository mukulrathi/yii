<?php

namespace backend\modules\user\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "user_shop_orders".
 *
 * @property string $id
 * @property integer $shop_id
 * @property string $orders
 * @property integer $created_at
 * @property integer $updated_at
    * @property string $amount 
 * @property UserShop $shop
 */
class UserShopOrders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_shop_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_id','amount','orders'], 'required'],
            [['shop_id', 'created_at', 'updated_at'], 'integer'],
            [['orders','amount'], 'string', 'max' => 255],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserShop::className(), 'targetAttribute' => ['shop_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shop_id' => 'Shop Name',
            'orders' => 'Offers Details ',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'amount' => 'Amount', 
        ];
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(UserShop::className(), ['id' => 'shop_id']);
    }
}
