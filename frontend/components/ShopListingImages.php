<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/11/2017
 * Time: 7:13 AM
 */

namespace frontend\components;

use backend\modules\user\models\UserShop;
use Yii;
use yii\data\ActiveDataProvider;
use yii\base\Widget;
use yii\web\NotFoundHttpException;

class ShopListingImages extends Widget
{
   public  $shop_id;
    public function run()
    {
        $model = $this->findModel($this->shop_id);

        if($model) {
            $images = $model->userShopFileMappings;

            return $this->render('gallery_widget', [
                'images' => $images
            ]);
        } else {
            return false;
        }
    }

        protected function findModel($id)
    {
        if (($model = UserShop::findOne($id)) !== null) {
            return $model;
        } else {
            return false;
        }
    }

}
