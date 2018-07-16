<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomeContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'welcome_content') ?>

    <?= $form->field($model, 'about_content') ?>

    <?= $form->field($model, 'about_image') ?>

    <?= $form->field($model, 'core_value_content') ?>

    <?php // echo $form->field($model, 'core_value_image') ?>

    <?php // echo $form->field($model, 'our_product_content') ?>

    <?php // echo $form->field($model, 'product_image1') ?>

    <?php // echo $form->field($model, 'product_image2') ?>

    <?php // echo $form->field($model, 'product_image3') ?>

    <?php // echo $form->field($model, 'product_image4') ?>

    <?php // echo $form->field($model, 'equipments') ?>

    <?php // echo $form->field($model, 'header_email') ?>

    <?php // echo $form->field($model, 'header_phone') ?>

    <?php // echo $form->field($model, 'about_in footer') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'web_url') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
