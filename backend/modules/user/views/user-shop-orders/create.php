<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\UserShopOrders */

$this->title = 'Create User Shop Orders';
$this->params['breadcrumbs'][] = ['label' => 'User Shop Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-shop-orders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
