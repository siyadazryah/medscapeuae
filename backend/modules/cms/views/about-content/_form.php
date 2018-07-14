<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-content-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'> 
            <?= $form->field($model, 'banner_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 1000x600 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->banner_image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/about_content/<?= $model->id ?>/small.<?= $model->banner_image; ?>" width="100" height="60"/>
                    <?php
                }
            }
            ?>

        </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'title1')->textInput(['maxlength' => true]) ?>

        </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'value1')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'title2')->textInput() ?>

        </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'value2')->textInput() ?>

        </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'title3')->textInput() ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'value3')->textInput() ?>

        </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'title4')->textInput() ?>

        </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'value4')->textInput() ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
