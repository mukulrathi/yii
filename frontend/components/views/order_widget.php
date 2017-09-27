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

<section class="latest-offer">
    <div class="inner-latest-offer">
        <h2 align="center"><span>Special Offers</span></h2>
    </div>

    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
//        'options' => [
//            'tag' => 'div',
//            'class' => 'row12',
//            'id' => 'list-wrapper',
//        ],
        'itemOptions' => [
            'class' => 'col-sm-2'
        ],
        'emptyText'=>$this->render('no_offers'), 'summary' => false,
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_partials/_orders_item', ['model' => $model]);
        },
    ]);
    ?>

</section>