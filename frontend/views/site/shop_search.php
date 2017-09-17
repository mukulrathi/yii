<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 9/16/2017
 * Time: 10:51 AM
 */
use yii\widgets\Pjax;
?>
    


    <?=
        \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => [
                'class' => 'col-md-3 col-sm-6 main-shop-side wow zoomIn'
            ],
            'summary' => false,
            'emptyText'=>$this->render('noshop'),
            'itemView' => function ($model, $key, $index, $widget) {

                return $this->render('_partials/_search_result', ['model' => $model]);
            },
        ]);
    ?>

