<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Shop Categories';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-Events-index">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="pull-right">
                <a href="<?= \yii\helpers\Url::to(['create'], true)?>" class="btn btn-success btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> Shop category_name</a>
            </div>
        </div>
        <div class="box-body">

            
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  =>$searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'category_name',
              [
                'label' =>'status',
                 'attribute'=>'status',
                 'value'=>function($model)
                 {
                    if($model->status ='1')
                    {
                        return 'Active';
                    }
                    else
                    {
                        return 'Inactive' ;
                    }
                 }

                ],

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
</div>
</div>
</div>
