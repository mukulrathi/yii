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

class ShopOffers extends Widget
{
    public  $shop_id;
    public function run()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => UserShop::find()->where(['id' =>$this->shop_id]),
            'pagination' => false
        ]);
        return $this->render('order_widget', [
            'dataProvider' => $dataProvider
        ]);

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
