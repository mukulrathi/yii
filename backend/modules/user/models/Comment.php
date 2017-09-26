<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property string $id
 * @property string $shop_id
 * @property string $username
 * @property string $comment
 * @property string $rating 
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
          [['username', 'rating'], 'string', 'max' => 255],
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
            'username' => 'Username',
            'comment' => 'Comment',
              'rating' => 'Rating', 
        ];
    }
}
