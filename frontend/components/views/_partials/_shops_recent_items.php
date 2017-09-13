<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/13/2017
 * Time: 6:09 PM
 */
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
use ckarjun\owlcarousel\OwlCarouselWidget;

?>

<<<<<<< HEAD
<div class ="my-item-class">
<li class="col-sm-2 thumb-gallery">
=======
<li class="item col-sm-2 thumb-gallery">
>>>>>>> e962913a1aca0f13afef14f52466bcf29f1e1a5c
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
<<<<<<< HEAD
</div>
=======


>>>>>>> e962913a1aca0f13afef14f52466bcf29f1e1a5c
