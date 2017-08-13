<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\UserShop */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Shops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default">
<div class="user-shop-view">

    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            [
                    'label' =>'Owner Name',
                      'value'=>$model->user->userProfile->first_name,

            ],
            'shop_name',
            'shop_category_id',
            'start_time:datetime',
            'end_time:datetime',
            [
                'label' =>'Shop Address',
                'value'=>$model->userShopAddress->address,

            ],
            [
                'label' =>'city',
                'value'=>$model->userShopAddress->city,

            ],
            [
                'label' =>'state',
                'value'=>$model->userShopAddress->state,

            ],
            [
                'label' =>'country',
                'value'=>$model->userShopAddress->country,

            ],
            [
                'label' =>'Zip code',
                'value'=>$model->userShopAddress->postal_code,

            ],






        ],
    ]) ?>

</div>
</div>