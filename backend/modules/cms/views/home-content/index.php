<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomeContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-content-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">


                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



                    <?= Html::a('<i class="fa-th-list"></i><span> Create Home Content</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <button class="btn btn-white" id="search-option" style="float: right;">
                        <i class="linecons-search"></i>
                        <span>Search</span>
                    </button>
                    <div class="table-responsive" style="border: none">
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
//                                'id',
                                'welcome_content:ntext',
                                'about_content:ntext',
                                'about_image',
                                'core_value_content:ntext',
                                // 'core_value_image',
                                // 'our_product_content:ntext',
                                // 'product_image1',
                                // 'product_image2',
                                // 'product_image3',
                                // 'product_image4',
                                // 'equipments:ntext',
                                // 'header_email:email',
                                // 'header_phone',
                                // 'about_in footer:ntext',
                                // 'address:ntext',
                                // 'phone',
                                // 'mobile',
                                // 'email:email',
                                // 'web_url:url',
                                // 'status',
                                // 'CB',
                                // 'UB',
                                // 'DOC',
                                // 'DOU',
                                ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{update}{delete}'],
                            ],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

