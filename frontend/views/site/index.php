<?php
use frontend\components\NewShopOffers;
use frontend\components\ShopListing;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

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
                    'options' => ['class' => 'field-search', 'id' => 'searchform'],
                ]); ?>
                <?= Html::activeTextInput($searchModel, 'q', ['placeholder' => 'Search Shop', 'id' => 'autocomplete']); ?>
                <?= Html::submitButton('Submit', ['id' => 'search']); ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </section>
    <!-- slider ends here -->

    <section class="shop">
        <?php echo ShopListing::widget() ?>
    </section>
        <section class="valid-offer">
    
        <?php echo NewShopOffers::widget() ?>
        </section>
</main>