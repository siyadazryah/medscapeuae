<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-form-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">


                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



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
//                                'name',
                                [
                                    'attribute' => 'name',
                                    'format' => 'raw',
//                                    'filter' => 'title',
                                    'value' => function ($data) {
                                        return "<span class='name_" . $data->id . "'>" . $data->name . "</span>";
                                    },
                                ],
                                [
                                    'attribute' => 'email',
                                    'format' => 'raw',
//                                    'filter' => 'title',
                                    'value' => function ($data) {
                                        return "<span class='email_" . $data->id . "'>" . $data->email . "</span>";
                                    },
                                ],
//                                'email:email',
                                [
                                    'attribute' => 'phone',
                                    'format' => 'raw',
//                                    'filter' => 'title',
                                    'value' => function ($data) {
                                        return "<span class='phone_" . $data->id . "'>" . $data->phone . "</span>";
                                    },
                                ],
//                                'phone',
                                            [
                                    'attribute' => 'subject',
                                    'format' => 'raw',
//                                    'filter' => 'title',
                                    'value' => function ($data) {
                                        return "<span class='subject_" . $data->id . "'>" . $data->subject . "</span>";
                                    },
                                ],
//                                'subject',
                                [
                                    'attribute' => 'message',
                                    'format' => 'raw',
                                    'value' => function ($data) {
                                        $content = strlen($data->message) > 25 ? substr($data->message, 0, 25) . '...' : $data->message;
                                        return "<span class='message_" . $data->id . "' val='" . $data->message . "'>" . $content . "</span>";
                                    },
                                ],
//                                 'message:ntext',
                                // 'date',
                                [
                                    'class' => 'yii\grid\ActionColumn',
//                                    'contentOptions' => ['style' => 'width:100px;'],
                                    'header' => 'Actions',
                                    'template' => '{view}{delete}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
//                                        <a href="javascript:;" onclick="jQuery('#modal-1').modal('show', {backdrop: 'fade'});" class="btn btn-primary btn-single btn-sm">Show Me</a>
                                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', "javascript:;", [
                                                        'onclick' => "jQuery('#modal-1').modal('show', {backdrop: 'fade'});",
                                                        'class' => 'feedback',
                                                        'id' => $model->id
                                            ]);
                                        },
                                    ],
                                ],
                            ],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Contact Us</h4>
            </div>

            <div class="modal-body">
                <table class="table">
                    
                    <tr>
                        <td>Name : </td><td class="content modal-name"></td>
                    </tr>
                    <tr>
                        <td>Email : </td><td class="content modal-email"></td>
                    </tr>
                    <tr>
                        <td>Phone : </td><td class="content modal-phone"></td>
                    </tr>
                    <tr>
                        <td>Subject : </td><td class="content modal-subject"></td>
                    </tr>
                    <tr>
                        <td>Message : </td><td class="content modal-message"></td>
                    </tr>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.feedback').click(function () {
            $('.content').html('');
            var id = $(this).attr('id');
            var name = $('.name_' + id).html();
            var email = $('.email_' + id).html();
            var phone = $('.phone_' + id).html();
            var subject = $('.subject_' + id).html();
            var message = $('.message_' + id).attr('val');
            $('.modal-name').html(name);
            $('.modal-email').html(email);
            $('.modal-phone').html(phone);
            $('.modal-subject').html(subject);
            $('.modal-message').html(message);
        });
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

