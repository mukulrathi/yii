<?php

namespace backend\modules\user\models\search;

use Yii;
use backend\modules\user\models\UserShop as BackendUserShop;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Expression;

class UserShop extends BackendUserShop
{
    public $q;
    public $shop_name;
    public $address;
    public $city;
    public $state;
    public $country;

    public $distance;
    public $latitude;
    public $longitude;


    public function rules()
    {
        return [
            [['q', 'city', 'address', 'state', 'country', 'latitude', 'longitude', 'distance_array' ,'shop_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = BackendUserShop::find();
        $query->joinWith(['userShopAddress'], true, 'JOIN');


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        // pr($query);

        $this->load($params);

        $select = ['user_shop.*'];
//
        $query->select($select)->distinct();

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

//        $query->andFilterWhere([
//            'user_shop.status' => 'Active',
//        ]);
        //pr($query);
        $query->andFilterWhere(['like', 'shop_name', $this->q])

            ->orFilterWhere(['like', 'deescription', $this->q])
            ->andFilterWhere(['or',
                ['like', 'userShopAddress.address', $this->address],
                ['like', 'userShopAddress.city', $this->city],
                ['like', 'userShopAddress.state', $this->state],
                ['like', 'userShopAddress.country', $this->country]
            ]);
    

//        $query->andFilterWhere(['userShopAddress.address_line' => $this->address]);

//        if(!empty($this->location)) {
//
//            $this->distance = isset($this->distance) ? $this->distance : 1;
//
//            $query->having('distance < :distance')->addParams([':distance' => $this->distance_array[$this->distance]]);
//        }

        $query->orderBy('created_at DESC');

        return $dataProvider;

    }
}