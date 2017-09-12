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
use backend\Modules\user\models\UserShopCategory;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

?>

<div class="row">
    <div class="heading">
        <h3>Shop Listing</h3>
        <div class="divider-header"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-10 col-sm-offset-1 col-sm-11">
                <form method="post" action="#" class="form-inline">
                    <div id="wapper">
                        <div class="style1">
                            <?php
                            $cat = UserShopCategory::find()->where(['status' => '1'])->all();
                            $list = ArrayHelper::map($cat, 'id', 'category_name');
                            $form = ActiveForm::begin();
                            ?>
                            <select class="select">
                                <option value="0" selected="">Shop Category</option>
                                <?php foreach ($list as $key =>$value){ ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                                <?php } ?>
                            </select>
                            <button type="button" id="cat" class="filter">Filter</button>
                        </div>
                        <div id="event-change"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php Pjax::begin(['id' => 'listing-grid-container']) ?>
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
    <?php Pjax::end() ?>
</div>

<?php
$js = <<<JS
$("#cat").on('click',function()
{
   var select = $('.select').val();
   
  alert(select);
});
JS;
$this->registerJS($js);
?>
