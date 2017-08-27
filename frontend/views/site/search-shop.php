<?php
# @Date:   2017-07-06T18:53:11+05:30
# @Last modified time: 2017-07-07T12:50:04+05:30
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
 use yii\helpers\Url;

$this->title = 'Shops';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="" class="shop-entry">
    <div class="shop-entry-detail">
        <h1>Search Results</h1>
        <div class="divider-header"></div>
    </div>
</section>
<section class="main-content">
    <div class="container">
    <div class="row shop-listing" style="padding:10px">
             <div class="col-xs-8">
                <?=
                ListView::widget([
                    'dataProvider' => $dataProvider,
                      'itemOptions' => [
                        'class' => 'col-md-5 col-sm-3 main-shop-side wow zoomIn'
                    ],
                    'summary' => false,
                    'emptyText'=>$this->render('noshop'),
                    'itemView' => function ($model, $key, $index, $widget) {
                      return $this->render('_partials/_shop_search', ['model' => $model]);
                    },
                ]);
                ?>
            </div>

        </div>
    </div>
</section>
