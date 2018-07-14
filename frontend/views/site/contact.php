<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<!-- Content -->
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <h2 class="in-head">Contac Us</h2>
        <div class="main-breadcrumb"><a href="<?= yii::$app->homeUrl ?>">Home</a><i>/</i><span>Contac Us</span> </div>
    </div>
</section>
<!--in-banner-->
<section class="in-main-contact">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="contact">
                    <div class="address">
                        <h3>Address</h3>
                        <?= $contacts_content->address ?>
                    </div>
                    <?= $contacts_content->pobox !== '' ? '<div class="address"><h3>P.O. Box</h3><p>' . $contacts_content->pobox . '</p></div>' : '' ?>
                    <?= $contacts_content->phone !== '' ? '<div class="address"><h3>Phone No</h3><p>' . $contacts_content->phone . '</p></div>' : '' ?>
                    <?= $contacts_content->mobile !== '' ? '<div class="address"><h3>Mobile No</h3><p>' . $contacts_content->mobile . '</p></div>' : '' ?>
                    <?= $contacts_content->fax !== '' ? '<div class="address"><h3>Fax</h3><p>' . $contacts_content->fax . '</p></div>' : '' ?>
                    <?= $contacts_content->email !== '' ? '<div class="address"><h3>Email</h3><p>' . $contacts_content->email . '</p></div>' : '' ?>

                </div>
            </div>
            <div class="col-md-7">
                <div class="map">
                    <iframe src="<?= $contacts_content->map ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
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

