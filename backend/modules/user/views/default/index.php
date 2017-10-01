<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Details';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-Events-index">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="pull-right">
                <a href="<?= \yii\helpers\Url::to(['create'], true)?>" class="btn btn-success btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> Add New users</a>
            </div>
        </div>
        <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
         'layout' => '<div class="text-right">{summary}</div>{items}<div class="text-center">{pager}</div>',
      
        'filterModel'  =>$searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
           'email:email',
            //   'status',
            'created_at:date',
             'updated_at:date',
        

            [
                'class' => 'yii\grid\ActionColumn',
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

