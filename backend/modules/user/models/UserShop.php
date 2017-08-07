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
 * @property integer $start_time
 * @property integer $end_time
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
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
            [[ 'shop_name', 'shop_category_id', 'start_time', 'end_time'], 'required'],
            [['user_id', 'shop_category_id', 'start_time', 'end_time', 'created_at', 'updated_at'], 'integer'],
            [['shop_name'], 'string', 'max' => 255],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
