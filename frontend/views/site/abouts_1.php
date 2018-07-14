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
                    <?= $about->our_vission ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="cont-box">
                    <h3>Our Mission</h3>
                    <?= $about->our_mission ?>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="in-contact-page-form"><!--in-search-result-details-contact-->
    <div class="container" >
        <h3 class="in-page-heading">Get in Touch</h3>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <input name="" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                    <input name="" type="text" class="form-control" placeholder="Last name">
                </div>
                <div class="col-md-6">
                    <input name="" type="text" class="form-control" placeholder="Phone No">
                </div>
                <div class="col-md-6">
                    <input name="" type="text" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-12">
                    <textarea name="" cols="" rows="" class="form-control" placeholder="Your Message"></textarea>
                </div>
                <div class="col-md-12">
                    <input name="" type="submit" class="submit">
                </div>

            </div>
        </form>
    </div>
</section>
<!-- Content END-->

