<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/11/2017
 * Time: 7:20 AM
 */
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
?>

<div class="shop-container">

    <div class="img-container">
        <a href="">
            <?php $shopimage = (!empty($model->userShopFileMappings[0]->file->path)) ? ($model->userShopFileMappings[0]->file->path)
                :  Url::to('uploads/no-image-avaailable.png', true) ?>
            <?= EasyThumbnailImage::thumbnailImg($shopimage, 370, 250, EasyThumbnailImage::THUMBNAIL_OUTBOUND)?>
            <div class="shop-info">
                <h2><i class=""></i><?= $model->shop_name ?></h2><span class="price"><sup>$</sup>39</span>
            </div>
        </a>
    </div>
    <div class="shop-title">
        <h3><strong><?= $model->shop_name ?></strong></h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
        <div class="read-info">
            <a href=<?php echo Url::to(['/site/view-shop','id'=>$model->id]) ?>>Read More</a>
        </div>
    </div>
</div>
