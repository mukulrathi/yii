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

<section class="valid-offer">
<div class="heading">
    <h3>Offers</h3>
    <div class="divider-header"></div>
</div>
 <div class="valid-offer-inner" style="width: 100%">
               
<div class="col-xs-12 colmdpadding">
    <div class="item  offer-item active">
        <ul class="thumbnails">


            <?=
            ListView::widget([
                'dataProvider' => $dataProvider,
                'summary' => false,
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_partials/_shops_recent_items', ['model' => $model]);
                },
            ]);
            ?>
        </ul>
    </div>
</div>
</div>
</section>