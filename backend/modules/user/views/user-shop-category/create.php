<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\UserShopCategory */

$this->title = 'Create User Shop Category';
$this->params['breadcrumbs'][] = ['label' => 'User Shop Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-shop-category-create">

    <div class="box-header with-border">
      <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
