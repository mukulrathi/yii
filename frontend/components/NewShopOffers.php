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
class NewShopOffers extends \yii\base\Widget
{
    public function run()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => UserShop::find()
                ->InnerJoin('user_shop_orders', '`user_shop_orders`.`shop_id` = `user_shop`.`id`')
                ->where(['user_shop.status' =>'1']),

             'pagination' => [
                'pageSize' => 125,
            ],
        ]);
        return $this->render('new_shop_listing', [
            'dataProvider' => $dataProvider
        ]);


    }
}