<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $mobile
 * @property string $address
 * @property string $state
 * @property string $city
 * @property string $landmark
 *
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'mobile', 'address'], 'required'],
            [['user_id', 'mobile'], 'integer'],
            [['first_name', 'last_name', 'address', 'state', 'city', 'landmark'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'state' => 'State',
            'city' => 'City',
            'landmark' => 'Landmark',
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
