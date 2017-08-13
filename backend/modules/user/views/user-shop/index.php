<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Shops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default">

<div class="user-shop-index">

    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

   <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'shop_name',
            'shop_category_id',
            'start_time:datetime',
             'end_time:datetime',
            // 'deescription:ntext',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn',
                    'buttons' => [
        'view' => function ($url, $model, $key) {
            return Html::a('<i class="fa fa-eye" aria-hidden="true"></i>', $url, ['class' => 'btn btn-primary btn-xs', 'title' => 'View']);
        },
        'update' => function ($url, $model, $key) {
            return Html::a('<i class="fa fa-pencil" aria-hidden="true"></i>', $url, ['class' => 'btn btn-info btn-xs', 'title' => 'Update']);
        },
        'delete' => function ($url, $model, $key) {
            return Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', $url, ['class' => 'btn btn-danger btn-xs', 'title' => 'Delete', 'data-method' => 'POST', 'data-confirm' => 'Are you sure you want to delete?']);
        },

    ],


            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
</div>