<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "user_shop_category".
 *
 * @property integer $id
 * @property string $category_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class UserShopCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_shop_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name','status'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
