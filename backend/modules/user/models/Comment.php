<?php

namespace backend\modules\user\models;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property string $id
 * @property string $shop_id
 * @property string $ name
 * @property string $comment
 * @property string $rating 
 * @property integer $created_at
* @property integer $updated_at
* @property string $shop_name
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_id', 'username', 'comment'], 'required'],
            [['shop_id'], 'integer'],
            [['comment'], 'string'],
             [['name', 'rating', 'shop_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shop_id' => 'Shop ID',
            'name' => 'Name',
            'comment' => 'Comment',
            'rating' => 'Rating',
           'created_at' => 'Created At',
           'updated_at' => 'Updated At',
           'shop_name' => 'Shop Name', 
        ];
    }

     public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

}
