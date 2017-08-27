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
<div class="heading">
    <h3>Offers Listing</h3>
    <div class="divider-header"></div>
</div>

<div class="item offer-item">
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
