<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdminPosts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-posts-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'post_name')->textInput(['maxlength' => true]) ?>

        </div><div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'admin')->dropDownList(['' => '--Select--', '1' => 'Yes', '0' => 'No']) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'cms_contents')->dropDownList(['' => '--Select--', '1' => 'Yes', '0' => 'No']) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'status')->dropDownList(['' => '--Select--', '1' => 'Enabled', '0' => 'Disabled']) ?>

        </div> 
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'float: right;']) ?>
        </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
