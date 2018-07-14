<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= Html::a('<i class="fa-th-list"></i><span> Create Slider</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
//                                                            'id',
                            [
                                'attribute' => 'image',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->image))
                                        $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/sliders/' . $data->id . '/small.' . $data->image . '"/>';
                                    return $img;
                                },
                            ],
                            'title',
//                            'sub_title',
//                            'alt_tag',
//                            [
//                                'attribute' => 'active_status',
//                                'format' => 'raw',
//                                'filter' => ['1' => 'Active', '0' => 'No Active'],
//                                'value' => function ($data) {
//                                    return \yii\helpers\Html::dropDownList('active_status', null, ['1' => 'Active', '0' => 'No'], ['options' => [$data->active_status => ['Selected' => 'selected']], 'class' => 'form-control slider_form', 'id' => $data->id,]);
//                                },
//                            ],
                            [
                                'attribute' => 'status',
                                'value' => function($model, $key, $index, $column) {
                                    if ($model->status == '0') {
                                        return 'Disabled';
                                    } elseif ($model->status == '1') {
                                        return 'Enabled';
                                    }
                                },
                                'filter' => [0 => 'Disabled', 1 => 'Enabled'],
                            ],
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
<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
        $('.slider_form').on('change', function () {
            var change = $(this).attr('id');
            var active = $('#' + change).val();
            var id = change;
            $.ajax({
                url: homeUrl + 'cms/slider/ajaxchange_active',
                type: "post",
                data: {active: active,id : id},
                success: function (data) {
                    var $data = JSON.parse(data);
                    if ($data.msg === "success") {
                        alert($data.title);
//                    $('#' + form).append($('<option value="' + $data.id + '" >' + $data.tag + '</option>'));
//                    $('#modal-4').modal('toggle');
                    } else {
                        alert($data.title);
                    }
//
                }, error: function () {
//
                }
            });
        });
    });
</script>

