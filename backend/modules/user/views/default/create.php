<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\User */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
  <div class="box-header">
    <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
  </div>

    <?= $this->render('_form', [
        'model' => $model,
        'modelUserProfile' => $modelUserProfile,
        'modelUserShop'   =>   $modelUserShop,
        'modelUserShopAddress' =>$modelUserShopAddress,


    ]) ?>

</div>
