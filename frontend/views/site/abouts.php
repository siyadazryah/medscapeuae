<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <h2 class="in-head">About Us</h2>
        <div class="main-breadcrumb"><a href="<?= yii::$app->homeUrl ?>">Home</a><i>/</i><span>About Us</span> </div>
    </div>
</section>
<!--in-banner-->
<div class="in-about-section">
    <div class="container">
        <div class="main-head-section"><small class="small">Welcome to </small><h2 class="head">MedScape Medical</h2></div>
        <?= $about->about_content ?>
    </div>
</div>
<section class="in-vision-section"><!--home-services -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="cont-box">
                    <h3>Our Vision</h3>
                    <p><?= $about->our_vission ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="cont-box">
                    <h3>Our Mission</h3>
                    <p><?= $about->our_mission ?></p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="in-contact-page-form"><!--in-search-result-details-contact-->
    <div class="container" >
        <h3 class="in-page-heading">Get in Touch</h3>
        <?php $form = ActiveForm::begin(); ?>
        <!--<form>-->
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Your Name'])->label(FALSE) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Your Email Id'])->label(FALSE) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Phone'])->label(FALSE) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Subject'])->label(FALSE) ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'message')->textarea(['maxlength' => true, 'placeholder' => 'Your Message', 'cols' => '40', 'rows' => '4'])->label(FALSE) ?>
            </div>
            <div class="col-md-12">
               <?= Html::submitButton('Submit', ['class' => 'submit']) ?>
            </div>

        </div>
        <!--</form>-->
        <?php ActiveForm::end(); ?>
    </div>
</section>
<!-- Content END-->

