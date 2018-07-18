<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <h2 class="in-head">Products</h2>
        <div class="main-breadcrumb"><a href="<?= yii::$app->homeUrl ?>">Home</a><i>/</i><span>Products</span> </div>
    </div>
</section>
<!--in-banner-->
<section class="in-product-section"><!--in-service-section-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?=
                $dataProvider->totalcount > 0 ? ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '_product_list',
                            'options' => [
                                'tag' => 'div',
                                'class' => 'row'
                            ],
                            'itemOptions' => [
                                'tag' => 'div',
                                'class' => 'col-lg-4 col-md-6'
                            ],
                            'pager' => [
                                'options' => ['class' => 'pagination'],
                                'prevPageLabel' => '<', // Set the label for the "previous" page button
                                'nextPageLabel' => '>', // Set the label for the "next" page button
                                'firstPageLabel' => '<<', // Set the label for the "first" page button
                                'lastPageLabel' => '>>', // Set the label for the "last" page button
                                'nextPageCssClass' => '>', // Set CSS class for the "next" page button
                                'prevPageCssClass' => '<', // Set CSS class for the "previous" page button
                                'firstPageCssClass' => '<<', // Set CSS class for the "first" page button
                                'lastPageCssClass' => '>>', // Set CSS class for the "last" page button
                                'maxButtonCount' => 5, // Set maximum number of page buttons that can be displayed
                            ],
                        ]) : '';
                ?>
            </div>







        </div>
    </div>
</section>
<!-- Content END-->

