<?php

namespace backend\modules\user\models;

use Yii;
use common\models\User as BaseUser;
/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
  * @property UserProfile $UserProfile
 	* @property UserShop[] $userShops
 */
class User extends BaseUser
{
    public $password ;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            ['email','email'],
          //   [['password_hash'], 'required', 'when' => function($model) {
          //      return $model->isNewRecord;
          //  }, 'whenClient' => 'function(attribute, value) {
          //      return $("#user-id").length == 0;
          //  }'],

            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
         //   ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

     public function getUserProfile()
    {
        return $this->hasOne(UserProfile::className(), ['user_id' => 'id']);
    } /**
    * @return \yii\db\ActiveQuery
    */
   public function getUserShops()
   {
       return $this->hasMany(UserShop::className(), ['user_id' => 'id']);
   }
}
