<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/13/2017
 * Time: 12:33 PM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
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
    <div class="col-sm-4">
        <?= $form->field($modelUserProfile, 'address')->textInput(['maxlength' => true]) ?>
    </div>
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
    <div class="col-sm-8">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

</div>
<?php ActiveForm::end(); ?>

    </div>
