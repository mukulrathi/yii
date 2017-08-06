<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\UserShopCategory */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
            <?php $form = ActiveForm::begin(); ?>
              <div class="box-body">
                <div class="form-group">
                <div class="col-sm-10">
           <?= $form->field($model, 'category_name')->textInput(['maxlength' => true])->hint('Name can be e.g medical,kirana store ') ?>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-10">
                    <?php $status = array('0'=>'Disabled','1'=>'Enabled');?>
                    <?= $form->field($model, 'status')->dropdownList($status,['prompt'=>'Please select the status']) ?>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
       <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>          </div>
              <!-- /.box-footer -->
            </form>
          </div>
<!-- <div class="user-shop-category-form">


    <div class="col-sm-5">
        <?= $form->field($model, 'category_name')->textInput(['maxlength' => true])->hint('Name can be e.g medical,kirana store ') ?>
    </div>
    <div class="col-sm-5">
    </div>

    <div class="col-sm-2">

    </div>

    <?php ActiveForm::end(); ?>

</div> -->
