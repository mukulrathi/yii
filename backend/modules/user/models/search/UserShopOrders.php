<?php

namespace backend\modules\user\models\search;

use Yii;
use backend\modules\user\models\UserShopOrders as BackendUserShopOrders;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Expression;

class UserShopOrders extends BackendUserShopOrders
{
    public $shop_name;
    public $orders;
   
    public function rules()
    {
        return [
            [['shop_name','orders'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = BackendUserShopOrders::find();
       // $query->joinWith(['userShop'], true, 'JOIN');


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        // pr($query);

        $this->load($params);

        //$select = ['user_shop.*'];

        //$query->select($select)->distinct();

        if (!$this->validate()) {
            return $dataProvider;
        }
      $query->andFilterWhere(['like', 'orders', $this->orders]);
        $query->orderBy('created_at DESC');

        return $dataProvider;

    }
}