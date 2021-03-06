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


class ShopListing extends \yii\base\Widget
{
    public function run()

    {
        $model = new UserShop();
        $dataProvider = new ActiveDataProvider([
            'query' => UserShop::find()->where(['status' =>'1'])->orderBy('created_at DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('shop_listing', [
            'dataProvider' => $dataProvider,
            'model' => $model
        ]);


    }
}
