<?php

namespace backend\modules\user\models;

use Yii;
use yii\helpers\Url;
use backend\modules\user\models\Files;
use yii\web\UploadedFile;
/**
 * This is the model class for table "user_shop_file_mapping".
 *
 * @property integer $id
 * @property integer $shop_id
 * @property integer $file_id
 *
 * @property UserShop $shop
 * @property Files $file
 */
class UserShopFileMapping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $gallery;

    public static function tableName()
    {
        return 'user_shop_file_mapping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_id', 'file_id'], 'required'],
            [['shop_id', 'file_id'], 'integer'],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserShop::className(), 'targetAttribute' => ['shop_id' => 'id']],
            [['file_id'], 'exist', 'skipOnError' => true, 'targetClass' => Files::className(), 'targetAttribute' => ['file_id' => 'id']],
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
            'file_id' => 'File ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(UserShop::className(), ['id' => 'shop_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFile()
    {
        return $this->hasOne(Files::className(), ['id' => 'file_id']);
    }
    public function upload(UserShop $shop)
    {


        if(!empty($this->gallery)) {

            self::deleteAll(['shop_id' => $shop->id]);
            foreach ($this->gallery as $image) {
            //  print_r($image); exit('12s');

                $time = time();
                $file_name = $image->baseName . '-' . $time . '.' . $image->extension;
                $image->saveAs(Yii::getAlias('@uploads/') . 'shop_folder/' . $file_name);

                $path = realpath(Yii::getAlias('@uploads/') . 'shop_folder/' . $file_name);
                $url = Url::to('uploads/shop_folder/' . $file_name, true);
                $this->saveFile($image, $path, $url, $shop->id, 'big');

            }
        }
      return true;
    }

    public function saveFile(UploadedFile $uploadedFile, $path, $url, $picture_id, $type)
    {
        $file = new Files();

        $file->filename = basename($path);
        $file->filesize = $uploadedFile->size;
        $file->mimetype = $uploadedFile->type;
        $file->extension = $uploadedFile->extension;
        $file->path      = $path;
        $file->url       = $url;
        $file->save(false);

        $fileE = new UserShopFileMapping();
        $fileE->shop_id = $picture_id;
        $fileE->file_id = $file->id;
        $fileE->save(false);
        return $fileE;
    }
}
