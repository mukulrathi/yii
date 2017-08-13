<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\UserShop */

$this->title = 'Update User Shop: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Shops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-default">
<div class="user-shop-update">

    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'modelUserShopAddress' =>$modelUserShopAddress,
        'file_urls'   =>$file_urls,
        'modelShopFile' =>$modelShopFile,
    ]) ?>

</div>
</div>
