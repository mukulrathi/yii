<?php
use frontend\components\ShopListing;
use frontend\components\NewShopOffers;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


?>
<?php $this->title = 'Shop Listing';
?>
<main role="main">
    <!-- start slider section -->
    <section id="slider">
        <div class="slider-content">
            <h1>Explore the world</h1>
        <div class="field-search" id="searchform">
                <?php $form = ActiveForm::begin([
                    'method' => 'get',
                    'action' => Url::to(['/site/search-shop/']),
                    'options'=>['class' =>'field-search', 'id'=>'searchform'],
                ]); ?>
              <?= Html::activeTextInput($searchModel, 'q', ['placeholder' => 'Search Shop', 'id' => 'autocomplete']); ?>
              <?= Html::submitButton('Submit', ['id'=> 'search']) ;?>
               <?php ActiveForm::end(); ?>
            </div>
        </div>
    </section>
    <!-- slider ends here -->
    <section id="" class="shop">
   <?php  echo  ShopListing::widget() ?>
  </section>
  <section class="shop">
     <?php  echo  NewShopOffers::widget() ?>
    </section>
</main>
