<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 8/11/2017
 * Time: 7:17 AM
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use ckarjun\owlcarousel\OwlCarouselWidget;

?>



<div class="heading">
    <h3>Offers</h3>
    <div class="divider-header"></div>
</div>

<div class="owl-carousel item offer-item">
    <ul class="thumbnails">

<?php
OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container',
        'class' => 'my-item-class'
    ],
    'pluginOptions' => [
        'autoPlay' => 2000,
        'items' => 10,
        'itemsDesktop' => [1199,10],
        'itemsDesktopSmall' => [979,10]
    ]
]);
?>
<?=

ListView::widget([
    'dataProvider' => $dataProvider,
      'summary' => false,
    'itemView' => function ($model, $key, $index, $widget) {
        return $this->render('_partials/_shops_recent_items', ['model' => $model]);
    },
]);
?>
<?php OwlCarouselWidget::end(); ?>
    </ul>
    </div>