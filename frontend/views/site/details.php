<?php

use frontend\components\ShopListingImages;
use frontend\components\ShopOffers;
use backend\modules\user\models\UserShopCategory;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;
use himiklab\thumbnail\EasyThumbnailImage;
use backend\modules\user\models\UserShopFileMapping;

?>
<style>
    .write-new {
        margin: 80px auto 0;
        width: 50%;
    }

    .write-new textarea {
        color: #444;
        font: inherit;
        outline: 0;
        border-radius: 3px;
        border: 1px solid #cecece;
        background-color: #fefefe;
        box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.06);
        overflow: auto;
        width: 100%;
        min-height: 80px;
        padding: 15px 20px;
    }
    .write-new text {
        color: #444;
        font: inherit;
        outline: 0;
        border-radius: 3px;
        border: 1px solid #cecece;
        background-color: #fefefe;
        box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.06);
        overflow: auto;
        width: 100%;
        min-height: 80px;
        padding: 15px 20px;
    }

    .write-new img {
        border-radius: 50%;
        margin-top: 15px;
    }

    .write-new button {
        float: right;
        background-color: #87bae1;
        box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.12);
        border-radius: 2px;
        border: 0;
        color: #ffffff;
        font-weight: bold;
        cursor: pointer;
        padding: 10px 25px;
        margin-top: 18px;
    }
.container-chat {
  margin: 0 auto;
  max-width: 800px;
  background: #fff;
  border-radius: 5px;
}

.people-list {
  width: 260px;
  float: left;
}
.people-list .search {
  padding: 20px;
}
.people-list input {
  border-radius: 3px;
  border: none;
  padding: 14px;
  color: white;
  background: #6A6C75;
  width: 90%;
  font-size: 14px;
}
.people-list .fa-search {
  position: relative;
  left: -25px;
}
.people-list ul {
  padding: 20px;
  height: 770px;
}
.people-list ul li {
  padding-bottom: 20px;
}
.people-list img {
  float: left;
}
.people-list .about {
  float: left;
  margin-top: 8px;
}
.people-list .about {
  padding-left: 8px;
}
.people-list .status {
  color: #92959E;
}

.chat {
  width: 100%;
  float: left;
  background: #F2F5F8;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  color: #434651;
}
.chat .chat-header {
  padding: 20px;
  border-bottom: 2px solid white;
}
.chat .chat-header img {
  float: left;
}
.chat .chat-header .chat-about {
  float: left;
  padding-left: 10px;
  margin-top: 6px;
}
.chat .chat-header .chat-with {
  font-weight: bold;
  font-size: 16px;
}
.chat .chat-header .chat-num-messages {
  color: #92959E;
}
.chat .chat-header .fa-star {
  float: right;
  color: #D8DADF;
  font-size: 20px;
  margin-top: 12px;
}
.chat .chat-history {
  padding: 30px 30px 20px;
  border-bottom: 2px solid white;
  overflow-y: scroll;
  height:auto;
  max-height: 250px
}
.chat .chat-history .message-data {
  margin-bottom: 15px;
}
.chat .chat-history .message-data-time {
  color: #a8aab1;
  padding-left: 6px;
}
.chat .chat-history .message {
  color: white;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 7px;
  margin-bottom: 30px;
  width: 90%;
  position: relative;
}
.chat .chat-history .message:after {
  bottom: 100%;
  left: 7%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #86BB71;
  border-width: 10px;
  margin-left: -10px;
}
.chat .chat-history .my-message {
  background: #ccc;
}
.chat .chat-history .other-message {
  background: #999;
}
.chat .chat-history .other-message:after {
  border-bottom-color: #94C2ED;
  left: 93%;
}
.chat .chat-message {
  padding: 30px;
}
.chat .chat-message textarea {
     width: 95%;
    border: none;
    display: table;
    padding: 10px 20px;
    font: 14px/22px "Lato", Arial, sans-serif;
    margin-bottom: 10px;
    border-radius: 5px;
    resize: none;
}

.chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}

.chat .chat-message button {
  float: right;
  color: #94C2ED;
  font-size: 16px;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  font-weight: bold;
  background: #F2F5F8;
}
.chat .chat-message button:hover {
  color: #75b1e8;
}

.online, .offline, .me {
  margin-right: 3px;
  font-size: 10px;
}

.online {
  color: #86BB71;
}

.offline {
  color: #E38968;
}

.me {
  color: #94C2ED;
}

.align-left {
  text-align: left;
}

.align-right {
  text-align: right;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

li{
  list-style-type: none;
}
</style>
<main role="main">

    <!-- start slider section -->
    <section id="" class="shop-entry">
        <div class="shop-entry-detail">

                              <?php
                                 $shop_image = UserShopFileMapping::find()->where(['shop_id'=> $model->id])->one();
                                 if(isset($shop_image->file->path))
                                 {
                            echo EasyThumbnailImage::thumbnailImg($shop_image->file->path,2069.5,540, EasyThumbnailImage::THUMBNAIL_OUTBOUND);
                              }
                              ?>

            <h1><?= $model->shop_name ?></h1>
            <div class="divider-header"></div>
        </div>
    </section>
    <!-- start slider section -->
    <section class="shop-images">
        <div class="inner-images">
            <div class="row">
                <div class="col-sm-6">
                    <?= ShopListingImages::widget(['shop_id' => $model->id]) ?>

                </div>

                <!-- ends here -->
                <div class="col-sm-6">
                    <div class="shop-indetail-info">
                        <h2>About Shop</h2>
                        <div class="divider-header-sub"></div>
                        <div class="about-shop">
                            <ul>
                                <li><span>Category: <?php $title = UserShopCategory::findOne([['id' => $model->shop_category_id]]);
                                        echo($title->category_name); ?>
                                <li><span>Shop Timing :- <?= $model->start_time . ' To ' . $model->end_time ?>
                                <li><span>Description
                                        <?= $model->deescription ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= ShopOffers::widget(['shop_id' => $model->id]) ?>
    <!-- map section -->

    <section class="mapsection">
        <h2>Get In Touch</h2>
        <div class="divider-header"></div>
        <div id="map">
            <?php
            echo yii2mod\google\maps\markers\GoogleMaps::widget([
                'userLocations' => [
                    [
                        'location' => [
                            'address' => isset($model->userShopAddress->address)?$model->userShopAddress->address:'',
                            'city' => isset($model->userShopAddress->city)?$model->userShopAddress->city:'',
                            'state' => isset($model->userShopAddress->state)?$model->userShopAddress->state:'',
                            'postal_code' => isset($model->userShopAddress->postal_code)?$model->userShopAddress->postal_code:'',


                            'country' => isset($model->userShopAddress->country)?$model->userShopAddress->country:'',
                        ],
                        'htmlContent' => '<h1>' . $model->shop_name . '</h1>',
                    ],
                ],
                'googleMapsUrlOptions' => [
                    'key' => 'AIzaSyCqs1ZJKD3E2ycq-m2GZaLV5WPfT7GJTis',
                ],
                'googleMapsOptions' => [
                    'mapTypeId' => 'roadmap',
                    'tilt' => 45,
                    'zoom' => 5,
                ],
            ]);
            ?>

        </div>
    </section>
    <!-- ends map section -->

    <section class="contact-details">
        <div class="contacts">
            <div class="col-sm-4">
                <div class="contact-info1">
                    <div class="home-round">
                        <i class="fa fa-home"></i>
                    </div>

                    <address>
                        <h4>Address:</h4>
                        <h5><?= isset($model->userShopAddress->address)?$model->userShopAddress->address:''; ?> <br/>
                            <?= isset($model->userShopAddress->city)?$model->userShopAddress->city:''; ?><br>
                            <?= isset($model->userShopAddress->state)?$model->userShopAddress->state:''; ?><br>
                            <?= isset($model->userShopAddress->postal_code)?$model->userShopAddress->postal_code:''; ?>
                        </h5>
                    </address>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="contact-info">
                    <div class="home-round">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4> Contact No:</h4>
                        <h5><?= isset($model->user->userProfile->mobile)? $model->user->userProfile->mobile:''; ?></h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="contact-info2">
                    <div class="home-round">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="mail-info">
                        <h4>Email Address:</h4>
                        <h5><?= isset($model->user->email)? $model->user->email:''; ?></h5>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php Pjax::begin(['id' => 'comment']);?>
<div id="review-grid-container">
 <div class="container-chat clearfix">
    <div class="chat">
      <div class="chat-history">
        <ul>
            <?php

            $modelc = \backend\modules\user\models\Comment::find()->where(['shop_id' =>$model->id])->all();
               $sum = \backend\modules\user\models\Comment::find()->where(['shop_id' => $model->id])->sum('rating');

                if(!empty($modelc)) {
                    ?>
                    <?php
                    foreach ($modelc as $key) { ?>
                        <li class="clearfix">
                            <div class="message-data align-right">
                                <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;
                                <span class="message-data-name"><?= $key->name ?></span> <i class="fa fa-circle me"></i>
                                <span>
                                  <?php 
                            echo StarRating::widget([
                                'name' => 'rating_2',
                                'value' => $key->rating,
                                'disabled' => false,
                                'pluginOptions' => [
                                    'displayOnly' => true,
                                  'theme' => 'krajee-uni',
                                    'filledStar' => '&#x2605;',
                                    'emptyStar' => '&#x2606',
                                      'size' => 'xs',                            
                                    
                                                            ]
                            ]);
                            ?>
                     
                                </span>
                            </div>
                            <div class="message other-message float-right">
                               <?= $key->comment ?>
                            </div>
                        </li>
                    <?php }
                }
                else{
                    echo "<li> No Comment found for these Shop </li>";
                }?>
          </ul>
      </div>
  </div>
</div>
<?php Pjax::end() ?>
</div>

     <li class="write-new">
        <?php $form = ActiveForm::begin([
            'id' => 'form-review-rating',
             'action' => '/site/write-review?id='.$model->id,
        ]);

        ?>

        <?= $form->field($comment, 'name')->textInput() ?>

        <?= $form->field($comment, 'comment')->textArea() ?>
        <?= $form->field($comment,'shop_name')->hiddenInput(['value'=>$model->shop_name])->label(false);?>
        <?php
        $pluginOptions = [
      'theme' => 'krajee-uni',
        'filledStar' => '&#x2605;',
        'emptyStar' => '&#x2606',
        
          'step' => 0.5,
        'size' => 'xs',
        'showCaption' => false,
        'showClear' => false
    ];

    echo $form->field($comment, 'rating')->widget(StarRating::classname(), [
        'name' => 'rating_21',
        'pluginOptions' => $pluginOptions
    ])->label(false);
    ?>

        <div class="form-group">
            <?= Html::submitButton('Publish Rating') ?>
        </div>
        <?php ActiveForm::end(); ?>

    </li>

    <!-- slider ends here -->
    <!--  ends here -->
</main>


<!-- footer starts here -->
<?php
$js = <<<JS

$(document).on("beforeSubmit", '#form-review-rating', function () {
    $.ajax({
        url: $(this).attr('action'),
        data: $(this).serializeArray(),
        type: 'post',
        success: function(response) {
            if(response.flag) {
                $.pjax.reload({container:"#comment"});
            $('#form-review-rating')[0].reset();
                $.notify("Comment Published", "success");
            } else {
                $('.field-newsletterform-email').removeClass('has-success').addClass('has-error');
                $('.field-newsletterform-email' + ' > .help-block').text(response.message);
            }
        }
    });
    return false;
});

JS;
$this->registerJs($js);
?>


