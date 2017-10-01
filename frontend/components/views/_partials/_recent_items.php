<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/11/2017
 * Time: 7:20 AM
 */
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
use kartik\rating\StarRating;
use yii\helpers\StringHelper ;
?>

<div class="shop-container">

    <div class="img-container">
        <a href="<?php echo Url::to(['/site/view-shop','id'=>$model->id]) ?>">
            <?php $shopimage = (!empty($model->userShopFileMappings[0]->file->path)) ? ($model->userShopFileMappings[0]->file->path)
                :  Url::to('uploads/no-image-avaailable.png', true) ?>
            <?= EasyThumbnailImage::thumbnailImg($shopimage, 370, 250, EasyThumbnailImage::THUMBNAIL_OUTBOUND)?>
            <div class="shop-info">
                <h2><i class=""></i><?= $model->shop_name ?></h2>
            </div>
        </a>
    </div>
    <div class="shop-title">
        <h3><strong><?= $model->shop_name ?></strong></h3>
        <h4> <?= StringHelper::truncate($model->deescription,70,'', 'UTF-8', true);  ?></h4>
       </h4>
        <div class="read-info">
            <a href=<?php echo Url::to(['/site/view-shop','id'=>$model->id]) ?>>Read More</a>
        </div>
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
