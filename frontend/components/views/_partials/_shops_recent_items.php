<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/13/2017
 * Time: 6:09 PM
 */
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;

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
            <h4>Praesent commodo</h4>
            <p>Nullam Condimentum Nibh Etiam Sem</p>
            <a class="btn btn-mini" href="#">» Read More</a>
        </div>
    </div>
</li>


