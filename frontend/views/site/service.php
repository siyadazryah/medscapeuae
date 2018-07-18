<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//use common\models\Chairmans;
//use common\models\Sectors;
//use yii\bootstrap\ActiveForm;
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <h2 class="in-head">Services</h2>
        <div class="main-breadcrumb"><a href="index.html">Home</a><i>/</i><span>Piped medical gas system</span> </div>
    </div>
</section>
<!--in-banner-->
<section class="in-services-section"><!--in-clients-section-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-categories">
                    <h2 class="head active"><a data-toggle="collapse"  href="#our-services" role="button">our Services</a></h2>
                    <ul class="list-box collapse" id="our-services">
                        <?php
                        if (!empty($service_lists)) {
                            foreach ($service_lists as $service_list) {
                                ?>
                                <li><?= Html::a($service_list->name, ['/site/service/', 'service' => $service_list->canonical_name], ['class' => 'dropdown-item']); ?>
                                    <?php
                                }
                            }
                            ?>
                    </ul>
                </div>
            </div> 
            <div class="col-lg-8">
                <div class="services-cont-box">
                    <h3 class="head"><?= $services->name ?></h3>
                    <div class="img-box"><img src="<?= yii::$app->homeUrl . 'uploads/services/' . $services->id . '/image.' . $services->image ?>" alt="<?= empty($services->image_alt) ? '' : $services->image_alt ?>" class="img-fluid"></div>
                    <?= $services->content ?>
                </div>
            </div>
        </div>
    </div>	
</section>
<section class="in-services-testimonial"><!--in-services-testimonial-->
    <div class="container">
        <div class="testimonial-box">
            <div class="img-box"><img src="<?= yii::$app->homeUrl . 'uploads/service_testimonial/' . $service_testimonial->id . '/image.' . $service_testimonial->image ?>" class="img-fluid rounded-circle"></div>
            <p><?= $service_testimonial->message ?></p>
            <h3 class="sub-head"><?= $service_testimonial->author ?></h3>
            <small><?= $service_testimonial->designation ?></small>
        </div>
    </div>
</section><!--in-services-testimonial-->
<section class="in-contact-page-form"><!--in-search-result-details-contact-->
    <div class="container" >
        <h3 class="in-page-heading">Get in Touch</h3>
        <?php $form = ActiveForm::begin(); ?>
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
        <?php ActiveForm::end(); ?>
    </div>
</section>