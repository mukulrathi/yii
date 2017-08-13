<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use backend\modules\user\models\UserShopCategory;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\UserShop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-shop-form">

    <?php $form = ActiveForm::begin(); ?>
  <div class="row">
      <div class="col-sm-4">
          <?= $form->field($model, 'shop_name')->textInput(['maxlength' => true]) ?>

      </div>
      <div class="col-sm-4">
          <?php $usershopcategory =  UserShopCategory::find()->where(['status'=>1])->all();
          $category = yii\helpers\ArrayHelper::map($usershopcategory,'id','category_name');
          ?>

          <?= $form->field($model, 'shop_category_id')->dropdownList($category,['prompt'=>'Select the shop category']); ?>

      </div>
      <div class="col-sm-4">
          <?= $form->field($model, 'start_time')->textInput() ?>

      </div>

  </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'end_time')->textInput() ?>

        </div>

        <div class="col-sm-4">
        <?= $form->field($modelUserShopAddress, 'address')->textInput(['maxlength' => true,'id'=>'autocomplete']) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($modelUserShopAddress, 'postal_code')->textInput(['maxlength' => true,'id'=>'postal_code']) ?>

        </div>

    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($modelUserShopAddress, 'city')->textInput(['maxlength' => true ,'id'=>'locality']) ?>

        </div>
        <div class="col-sm-4">
            <?= $form->field($modelUserShopAddress, 'state')->textInput(['maxlength' => true,'id'=>'administrative_area_level_1']) ?>

        </div>
        <div class="col-sm-4">
        <?= $form->field($modelUserShopAddress, 'country')->textInput(['maxlength' => true,'id'=>'country']) ?>
        </div>
    </div>
    <div class="row">
        <div class ="col-sm-12">
            <?= $form->field($model, 'shop_image[]')->widget(FileInput::classname(), [
                'options' => [
                    'multiple' => true,
                    'accept' => 'image/*'
                ],
                'pluginOptions' => [
                    'initialPreview' => $file_urls,
                    'initialPreviewAsData' => true,
                    'uploadExtraData' => [
                        'initialPreviewAsData' => true,
                        'removeClass' => 'btn btn-default rm-file-input',
                    ],
                    'maxFileCount' => 4,
                    'browseOnZoneClick' => true,
                    'showBrowse' => true,
                    'allowedFileExtensions'=>['jpg', 'png', 'jpeg']
                ]
            ])->label('Shop Image'); ?>

        </div>
    </div>

    <div class="row">
    <div class="col-sm-12">
            <?= $form->field($model, 'deescription')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                    'menubar' => false
                ]
            ]);?>
    </div>
</div>
  <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
