<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\user\models\UserShop;

/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\UserShopOrders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-shop-orders-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    $shop = Usershop::find()->all();
    $shopname = \yii\helpers\ArrayHelper::map($shop,'id','shop_name');
    ?>
    <?= $form->field($model, 'shop_id')->dropDownList($shopname,['Select shop Name'])->label('select shop name'); ?>
    <?= $form->field($model, 'orders')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
