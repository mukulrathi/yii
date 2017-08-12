<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property integer $id
 * @property string $filename
 * @property integer $filesize
 * @property string $mimetype
 * @property string $extension
 * @property string $path
 * @property string $url
 
 * @property UserShopFileMapping[] $userShopFileMappings
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filename', 'filesize', 'mimetype', 'extension', 'path','url'], 'required'],
            [['filesize'], 'integer'],
            [['filename', 'mimetype', 'extension', 'path'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filename' => 'Filename',
            'filesize' => 'Filesize',
            'mimetype' => 'Mimetype',
            'extension' => 'Extension',
            'path' => 'Path',
            'url' => 'Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserShopFileMappings()
    {
        return $this->hasMany(UserShopFileMapping::className(), ['file_id' => 'id']);
    }
}
