<?php

namespace backend\modules\user\models\search;

use Yii;
use backend\modules\user\models\UserShopCategory as BackendUserShopCategory;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Expression;

class UserShopCategory extends BackendUserShopCategory
{
    public $category_name;
   
    public function rules()
    {
        return [
            [['category_name'], 'safe'],
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
        $query = BackendUserShopCategory::find();
       // $query->joinWith(['userShop'], true, 'JOIN');


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        // pr($query);

        $this->load($params);
    

        if (!$this->validate()) {
            return $dataProvider;
        }
      $query->andFilterWhere(['like', 'category_name', $this->category_name]);
        $query->orderBy('created_at DESC');

        return $dataProvider;

    }
}