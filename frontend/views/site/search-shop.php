<?php
# @Date:   2017-07-06T18:53:11+05:30
# @Last modified time: 2017-07-07T12:50:04+05:30
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use backend\Modules\user\models\UserShopCategory;
use yii\helpers\ArrayHelper;



$this->title = 'Shops';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="shop-entry">
    <div class="shop-entry-detail">
        <h1>Search Results</h1>
        <div class="divider-header"></div>
    </div>
</section>
    

    <div class ="col-xs-3">

                     <?php
                        $cat = UserShopCategory::find()->where(['status' => '1'])->all();
                        $list = ArrayHelper::map($cat, 'id', 'category_name');
                        ?>
                            <H4>Shop Category</H4>
                            <?php foreach ($list as $key => $value) {
                                ?>

                            <p><input type="radio" name="select"  id="category" value= "<?=$key ?>" ><?= $value ?></p>
                            <?php } ?>
                      
                    </div>
    </div>
    <div class="row shop-listing"  id ="shop" style="padding:10px">
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
<?php
$url = Url::to(['site/shop-search'], true);
$js = <<<JS
 $('input[id=category]').click(function(){
  var select = $(this).val();
  $.ajax({
            url:'$url',
            data:{value:select},
            method:'POST',
            success:function(result)
            {
                  $("#shop").html(result);
            }


   });
  // return false ;





});
JS;
$this->registerJS($js);
?>
