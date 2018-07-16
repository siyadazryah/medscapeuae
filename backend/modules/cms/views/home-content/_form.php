<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\HomeContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-content-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-xs-12 left_padd'>    <?= $form->field($model, 'header_email')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-xs-12 left_padd'>    <?= $form->field($model, 'header_phone')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
            <?=
            $form->field($model, 'welcome_content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-xs-12 left_padd'>    
            <?=
            $form->field($model, 'about_content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'preset',
            ])
            ?>

        </div>
        <div class='col-md-6 col-xs-12 left_padd'>   
            <?=
            $form->field($model, 'core_value_content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'preset',
            ])
            ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'about_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>About Image [ File Size :( 960x640 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->about_image)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/about_image.<?= $model->about_image; ?>?rand()"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-6 col-xs-12 left_padd'> 
            <?= $form->field($model, 'core_value_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Core Value Image [ File Size :( 960x640 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->core_value_image)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/core_value_image.<?= $model->core_value_image; ?>?rand()"/>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
            <?=
            $form->field($model, 'our_product_content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'product_image1', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Product Image 1 [ File Size :( 300x228 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->product_image1)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/product_image1.<?= $model->product_image1; ?>?rand()"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'product_image2', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Product Image 2 [ File Size :( 300x228 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->product_image2)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/product_image2.<?= $model->product_image2; ?>?rand()"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'product_image3', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Product Image 3 [ File Size :( 300x228 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->product_image3)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/product_image3.<?= $model->product_image3; ?>?rand()"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'product_image4', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Product Image 4 [ File Size :( 300x228 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->product_image4)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/product_image4.<?= $model->product_image4; ?>?rand()"/>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-xs-12 left_padd'>    <?= $form->field($model, 'about_in_footer')->textarea(['rows' => 6]) ?>

        </div>
        <div class='col-md-6 col-xs-12 left_padd'>    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'email')->textInput() ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'web_url')->textInput(['maxlength' => true]) ?>

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
