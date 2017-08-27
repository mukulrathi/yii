<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/20/2017
 * Time: 12:31 PM
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
        <div class="field-search" id="searchform">
        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => Url::to(['/site/search-shop/'], true),
        ]); ?>
                <?= $form->field($searchModel, 'q')->textInput(['id'=>"searchterm" ,
       'placeholder'=>'Search'])->label(false); ?>
                <button type="button" id="search"><img src="img/search.png" alt="search icon"></button>
        <?php ActiveForm::end(); ?>
        </div>
