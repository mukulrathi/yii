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
<link href="https://www.jssor.com/style/site/css/site-style-2.1.0.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jssor-slider/25.2.0/jssor.slider.min.js"></script>
<script>
    jssor_slider1_init = function (containerId) {
        var options = { $AutoPlay: 1 };
        var jssor_slider1 = new $JssorSlider$(containerId, options);
    };
</script>


<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
    <!-- Slides Container -->
    <?php if (count($images) > 0) {
        foreach($images as $out):?>

<!--                <div><img u="image" src="image1.jpg" /></div>-->
<!--                <div><img u="image" src="image2.jpg" /></div>-->

            <div >
                <?= EasyThumbnailImage::thumbnailImg($out->file->path, 550, 300, EasyThumbnailImage::THUMBNAIL_OUTBOUND)?>

                <h4 class="slider-single-title">shop image</h4>
            </div>
        <?php endforeach ; }
    else
    {
        echo 'No image avaialble';
    }

    ?>
    <!-- Trigger -->

    </div>

    <script>jssor_slider1_init('slider1_container');</script>

</div>


