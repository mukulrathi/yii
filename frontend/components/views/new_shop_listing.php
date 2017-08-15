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


<div class="item offer-item">
    <ul class="thumbnails">
   </ul></div>
<?=
ListView::widget([
    'dataProvider' => $dataProvider,
//        'options' => [
//            'tag' => 'div',
//            'class' => 'row12',
//            'id' => 'list-wrapper',
//        ],
    'summary' => false,
    'itemView' => function ($model, $key, $index, $widget) {
        return $this->render('_partials/_shops_recent_items', ['model' => $model]);
    },
]);
?>
    </ul>
    </div>
