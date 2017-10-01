<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/13/2017
 * Time: 6:09 PM
 */
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
use kartik\rating\StarRating;
use yii\helpers\StringHelper ;


?>

<li class="item col-sm-2 thumb-gallery">
    <div class="fff">
        <div class="thumbnail">
            <div class="offer popular"><span>Offer</span>
            </div>
            <?php $shopimage = (!empty($model->userShopFileMappings[0]->file->path)) ? ($model->userShopFileMappings[0]->file->path)
                :  Url::to('uploads/no-image-avaailable.png', true) ?>
            <?= EasyThumbnailImage::thumbnailImg($shopimage, 370, 250, EasyThumbnailImage::THUMBNAIL_OUTBOUND)?>

        </div>
        <div class="caption">
            <h4><?= $model->shop_name ?></h4>
          <p> <?= StringHelper::truncate($model->deescription,70,'', 'UTF-8', true);  ?></p>
                <a href=<?php echo Url::to(['/site/view-shop','id'=>$model->id]) ?>>Read More</a>
          <?php
        $sum = \backend\modules\user\models\Comment::find()->where(['shop_id' => $model->id])->sum('rating');
                            $count = \backend\modules\user\models\Comment::find()->where(['shop_id' => $model->id])->count();
                            $rate = ($count == 0) ? 0 : $sum / ($count);
                            echo StarRating::widget([
                                'name' => 'rating_2',
                                'value' => $rate,
                                'disabled' => false,
                               'pluginOptions' => [
                                    'displayOnly' => true,
                                  'theme' => 'krajee-uni',
                                    'filledStar' => '&#x2605;',
                                    'emptyStar' => '&#x2606',
                                      'size' => 'xs',                            
                              ],
                                 ]);
                             
              
        ?>
  
        </div>
    </div>
</li>



