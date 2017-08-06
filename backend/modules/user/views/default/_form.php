<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use backend\modules\user\models\UserShopCategory;
/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

   <div class="row">
    <div class="col-sm-4">
      <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    </div>
   <div class="col-sm-4">
     <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
   </div>

   // Usage with ActiveForm and model
  <?php echo $form->field($model, 'email')->widget(FileInput::classname(), [
       'options' => ['accept' => 'image/*'],
   ]);
?>

   </div>
   <div class="row">
    <div class="col-sm-4">
      <?= $form->field($modelUserProfile, 'first_name')->textInput(['maxlength' => true]) ?>
    </div>
   <div class="col-sm-4">
     <?= $form->field($modelUserProfile, 'last_name')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-sm-4">
     <?= $form->field($modelUserProfile, 'mobile')->textInput(['maxlength' => true]) ?>
   </div>
  <div class="col-sm-4">
    <?= $form->field($modelUserProfile, 'address')->textInput(['maxlength' => true]) ?>
  </div>
    <div class="col-sm-4">
      <?= $form->field($modelUserProfile, 'state')->textInput(['maxlength' => true]) ?>
    </div>
   <div class="col-sm-4">
     <?= $form->field($modelUserProfile, 'city')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-sm-4">
     <?= $form->field($modelUserProfile, 'landmark')->textInput(['maxlength' => true]) ?>
   </div>

       <div class ="col-sm-4">
         <?= $form->field($modelUserShop, 'shop_name')->textInput(['maxlength' => true]) ?>

      </div>
     <div class ="col-sm-4">
       <?= $form->field($modelUserShop, 'start_time')->textInput(['maxlength' => true]) ?>
     </div>
     <div class ="col-sm-4">
       <?= $form->field($modelUserShop, 'end_time')->textInput(['maxlength' => true]) ?>
     </div>
     <div class ="col-sm-4">
       <?= $form->field($modelUserShopAddress, 'address')->textInput(['maxlength' => true]) ?>
     </div> <div class ="col-sm-4">
        <?= $form->field($modelUserShopAddress, 'state')->textInput(['maxlength' => true]) ?>
      </div>
      <div class ="col-sm-4">
        <?= $form->field($modelUserShopAddress, 'city')->textInput(['maxlength' => true]) ?>
      </div>
      <div class ="col-sm-4">
        <?= $form->field($modelUserShopAddress, 'country')->textInput(['maxlength' => true]) ?>
      </div>

      <div class ="col-sm-4">
         <?= $form->field($modelUserShopAddress, 'postal_code')->textInput(['maxlength' => true]) ?>
       </div>
     <div class="col-sm-4">
       <?php $usershopcategory =  UserShopCategory::find()->where(['status'=>1])->all();
         $category = yii\helpers\ArrayHelper::map($usershopcategory,'id','category_name');
      //   print_r($usershopcategory); exit('12a');
        ?>
     <?= $form->field($modelUserShop, 'shop_category_id')->dropdownList($category,['prompt'=>'Select the shop category']); ?>

     </div>

   <div class="col-sm-4">
     <?php $status = array('0'=>'Disabled','1'=>'Enabled');?>
   <?= $form->field($model, 'status')->dropdownList($status,['prompt'=>' Select the status']); ?>
   </div>

    <div class="col-sm-4">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
   </div>
    <?php ActiveForm::end(); ?>

</div>
