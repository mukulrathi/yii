<?php
# @Date:   2017-07-06T18:53:11+05:30
# @Last modified time: 2017-07-07T12:50:04+05:30
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;


$this->title = 'Shops';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 style="margin-bottom: 20px; margin-top: 0px;"><?= $this->title ?></h1>
            </div>
        </div>
        <div class="row shop-listing">
             <div class="col-md-6 col-xs-12 pull-left">
                <?=
                ListView::widget([
                    'dataProvider' => $dataProvider,
                      'itemOptions' => [
                        'class' => 'col-md-3 col-sm-6 main-shop-side wow zoomIn'
                    ],
                    'summary' => false,
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('_partials/_shop_search', ['model' => $model]);
                    },
                ]);
                ?>
            </div>
        </div>
    </div>
</section>