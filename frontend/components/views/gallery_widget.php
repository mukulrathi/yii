<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/11/2017
 * Time: 9:00 PM
 */
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
?>

<div class="owl-carousel owl-theme">

        <?php if (count($images) > 0) {
      foreach($images as $out):?>
      <div class="item">
          <?= EasyThumbnailImage::thumbnailImg($out->file->path, 370, 250, EasyThumbnailImage::THUMBNAIL_OUTBOUND)?>
          <h1 class="slider-single-title">shop image</h1>
      </div>
    <?php endforeach ; }
    else
        {
         echo 'No image avaialble';
        }

    ?>


 </div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script type="text/javascript">
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
            items:1
        }
    }
})
</script>