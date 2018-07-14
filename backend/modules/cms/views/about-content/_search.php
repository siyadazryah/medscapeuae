<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'banner_image') ?>

    <?= $form->field($model, 'title1') ?>

    <?= $form->field($model, 'value1') ?>

    <?= $form->field($model, 'title2') ?>

    <?php // echo $form->field($model, 'value2') ?>

    <?php // echo $form->field($model, 'title3') ?>

    <?php // echo $form->field($model, 'value3') ?>

    <?php // echo $form->field($model, 'title4') ?>

    <?php // echo $form->field($model, 'value4') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
