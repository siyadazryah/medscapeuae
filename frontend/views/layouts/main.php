<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\widgets\ActiveForm;

$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <!-- Site Title-->
        <title>MedScape Medical</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta charset="utf-8">
        <link rel="shortcut icon" href="favicon/icon.png">
        <script   src="<?= yii::$app->homeUrl ?>js/jquery-1.6.1.min.js"></script>
        <?php $this->head() ?>

    </head>
    <body>
        <?php $this->beginBody() ?>
        <!-- Page -->
        <header class="header main_head navbar-custom fixed-top" role="navigation"><!--header--> 
            <!--head-top-section-->
            <section class="top-section"><!--top-section-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="top-cont-left">MedScape Medical High Quality Products</div>
                        </div>
                        <div class="col-md-7">
                            <div class="top-right-section">
                                <div class="call"><span>CALL NOW:</span> <a href="tel:042 413 253" class="head-text">042 413 253</a></div>
                            </div>
                            <div class="top-right-section">
                                <div class="call"><span>E-Mail:</span> <a href="mailto:info@medscapeuae.com" class="head-text">info@medscapeuae.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--top-section-->
            <section class="head-middle-section"><!--head-top-section-->
                <div class="container">
                    <div class="mobile-view-logo">
                        <div class="row">
                            <div class="col-10">
                                <h1 class="logo-mobile"><a href="index.html"><img src="<?= yii::$app->homeUrl ?>images/logo.png" alt="Epitome In Dubai" title="Epitome In Dubai" class="img-fluid"></a></h1>
                            </div>
                            <div class="col-2">
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 ">
                            <h1 class="logo"><a href="index.html"><img src="<?= yii::$app->homeUrl ?>images/logo.png" alt="Epitome In Dubai" title="Epitome In Dubai" class="img-fluid"></a></h1>
                        </div>
                        <div class="col-lg-8">
                            <div class="nav-section"><!--nav-section-->
                                <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">
                                            <li>
                                                <?= Html::a('Home', ['site/index'], ['class' => 'active']) ?>
                                                <!--<a href="index.html" class="active">Home</a>-->
                                            </li>
                                            <li><?= Html::a('About Us', ['/about-us']) ?></li>
                                            <li class="dropdown active"> <a href="#"  data-toggle="dropdown">Services</a>
                                                <ul class="dropdown-menu animated2 fadeInUp">
                                                    <li><?= Html::a('Piped medical gas system', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a('Medical Gas equipment’s', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a('Service and AMC contract', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a('OT Sliding door maintenance', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a('Medical furniture', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a('Project management', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a('Testing and commissioning', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a('Dental air & vacuum maintenance', ['/services'], ['class' => 'dropdown-item']) ?></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <?= Html::a('Products', ['site/products']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Project Gallery', ['/gallery']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Our Clients', ['/site/clients']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Contac Us', ['/contact']) ?>
                                                <!--<a href="contact.html">Contac Us</a>-->
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!--nav-section--> 
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <?= $content ?>
        <!--/******************************/-->


        <!-- Page Footer -->
        <section class="footer">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4 col-md-12">
                        <div class="f-cont-box">
                            <h6 class="f-head">About</h6>
                            <p>MedScape as the name suggests is an extensive view or representation of the medical world and the equipments used in the medical world. We at MedScape make sure that the best medical products such as Laboratory & Scientific Equipment, Medical & Surgical Equipment, Physiotherapy Equipments, Hospital Furniture’s, Wheel Chairs, Orthopaedic supports, Surgical disposables , Medical Gas Equipment etc. </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="f-cont-box">
                            <h6 class="f-head">Navigation</h6>
                            <ul class="f-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="project-gallery.html">Project Gallery</a></li>
                                <li><a href="our-clients.html">Our Clients</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contac Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="f-cont-box">
                            <h6 class="f-head">Services</h6>
                            <ul class="f-list">
                                <li><a href="services.html">Piped medical gas system</a></li>
                                <li><a href="services.html">Medical Gas equipment’s</a></li>
                                <li><a href="services.html" >Service and AMC contract</a></li>
                                <li><a href="services.html" >OT Sliding door maintenance</a></li>
                                <li><a href="services.html" >Medical furniture</a></li>
                                <li><a href="services.html" >Project management</a></li>
                                <li><a href="services.html" >Testing and commissioning</a></li>
                                <li><a href="services.html" >Dental air & vacuum maintenance </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="f-head">Contacts</h6>
                        <ul class="f-Address-list">
                            <li>

                                <b>Address</b>
                            <dd class="cont">Medscape Medical Equipment Trading LLc<br>
                                Lootha building, 1st floor, Room 103,<br>
                                Al  Qusais, Industrial area number 4<br>
                                Dubai, UAE</dd>
                            </li>
                            <li>
                                <b>Phones</b>
                            <dd class="cont">Tel: 042 413 253</dd>
                            <dd class="cont">Mobile: 050 759 3262</dd>
                            </dd>
                            </dl>
                            </li>
                            <li>
                                <b>E-mail</b>
                            <dd class="cont"><a href="mailto:sales@medscapeuae.com">info@medscapeuae.com</a></dd>
                            </li>
                            <li>
                            <dd class="cont">Web: www.medscapeuae.com</dt>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-copyright">
            <div class="container">
                <p class="rights">Copyright © 2018 MedScape Medical. All Rights Reserved.</p>
                <ul class="list-follows">
                    <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-vimeo" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-youtube" href="#"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-pinterest" href="#"></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </footer>
        <!-- Global Mailform Output-->
        <a href="#" class="scrollup">Scroll</a> <!--Scroll--> 

        <!------scrollup-----> 
        <script type="text/javascript">
            $(document).ready(function () {

                $(window).scroll(function () {

                    if ($(this).scrollTop() > 100) {

                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.scrollup').click(function () {
                    $("html, body").animate({scrollTop: 0}, 1000);
                    return false;
                });

            });
        </script>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
</body>

</html>


<script >
    jQuery(document).ready(function () {

        $('#newsletter').on('submit', function (e) {
            e.preventDefault();
            $('.subscribe_email-2_error').html('');
            $('.subscribe_email-2_msg').html('');
            var email = $('#emailsubscription-email').val();
            if (email !== "") {
                validateEmail(email);
            } else {
                $('.subscribe_email-2_error').html('Enter Valid Email');
            }
        });

        function validateEmail(sEmail) {

            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

            if (filter.test(sEmail)) {

                $.ajax({
                    type: 'POST',
//                cache: false,
//                async: false,
                    data: {email: sEmail},
                    url: '<?= Yii::$app->homeUrl; ?>subscribe-mail',
                    success: function (data) {
                        var $data = JSON.parse(data);
                        if ($data.msg === 'success') {
                            $('#subscribe_email-2').val('');
                            $('.subscribe_email-2_msg').html(sEmail + ' Successfully subscribed');
                        } else {
                            $('.subscribe_email-2_error').html(sEmail + ' already subscribed');
                        }
                    }
                });

            } else {
                $('.subscribe_email-2_error').html('Enter Valid Email');

            }

        }

        'use strict';
        dz_rev_slider_2();
    });	/*ready*/
</script>