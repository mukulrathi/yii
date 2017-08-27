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

?>

<div class="row">
  <div class="heading">
      <h3>Shop Listing</h3>
      <div class="divider-header"></div>
  </div>
  <?php Pjax::begin(['id' => 'listing-grid-container'])?>
    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
//        'options' => [
//            'tag' => 'div',
//            'class' => 'row12',
//            'id' => 'list-wrapper',
//        ],
        'itemOptions' => [
            'class' => 'col-md-3 col-sm-6 main-shop-side wow zoomIn'
        ],
        'summary' => false,
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_partials/_recent_items', ['model' => $model]);
        },
    ]);
    ?>
    <?php Pjax::end()?>
</div>
