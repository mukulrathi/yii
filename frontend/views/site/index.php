<?php
use frontend\components\NewShopOffers;
use frontend\components\ShopListing;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use ckarjun\owlcarousel\OwlCarouselWidget;

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
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
    <section id="" class="shop">
        <?php echo ShopListing::widget() ?>
    </section>

            <div class="owl-carousel">

            <?php
            foreach ($shopoffers as $output) {?>

                <div class="item">
                    <div class="thumbnail">
                        <div class="offer popular"><span>Offer</span>                                               </div>
                        <a href="#"><img src="img/shop.jpg" alt="offer shop">
                        </a>
                    </div>
                    <div class="caption">
                        <h4>Praesent commodo</h4>
                        <p>Nullam Condimentum Nibh Etiam Sem</p>
                        <a class="btn btn-mini" href="#">» Read More</a>
                    </div>
                </div>
            <?php   }
            ?>
            </div>

        <?php NewShopOffers::widget() ?>
</main>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
