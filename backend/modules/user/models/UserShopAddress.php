<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "user_shop_address".
 *
 * @property integer $shop_id
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property integer $postal_code
 *
 * @property UserShop $shop
 */
class UserShopAddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_shop_address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'city', 'state', 'country', 'postal_code'], 'required'],
            [['postal_code'], 'integer'],
            [['address', 'city', 'state', 'country'], 'string', 'max' => 255],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserShop::className(), 'targetAttribute' => ['shop_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shop_id' => 'Shop ID',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'postal_code' => 'Postal Code',
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
