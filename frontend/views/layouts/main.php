<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\widgets\ActiveForm;

$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;

AppAsset::register($this);
$home_contents = common\models\HomeContent::findOne(1);
$services = \common\models\Services::find()->where(['status' => 1])->all();
$social_media_links = \common\models\SocialMediaLinks::findOne(1);
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
        <script src="<?= yii::$app->homeUrl ?>js/jquery.min.js"></script>
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
                                <div class="call"><span>CALL NOW:</span> <a href="tel:<?= $home_contents->header_phone ?>" class="head-text"><?= $home_contents->header_phone ?></a></div>
                            </div>
                            <div class="top-right-section">
                                <div class="call"><span>E-Mail:</span> <a href="mailto:<?= $home_contents->header_email ?>" class="head-text"><?= $home_contents->header_email ?></a></div>
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
                                                <?= Html::a('Home', ['/site/index'], ['class' => 'active']) ?>
                                                <!--<a href="index.html" class="active">Home</a>-->
                                            </li>
                                            <li><?= Html::a('About Us', ['/site/about']) ?></li>
                                            <li class="dropdown active"> <a href=""  data-toggle="dropdown">Services</a>
                                                <ul class="dropdown-menu animated2 fadeInUp">
                                                    <?php
                                                    if (!empty($services)) {
                                                        foreach ($services as $service) {
                                                            ?>
                                                            <li> <?= Html::a($service->name, ['/site/service', 'service' => $service->canonical_name], ['class' => 'dropdown-item']) ?></li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                            <li>
                                                <?= Html::a('Products', ['/site/products']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Project Gallery', ['/site/gallery']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Our Clients', ['/site/clients']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Contac Us', ['/site/contact']) ?>
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
                            <p><?= $home_contents->about_in_footer ?></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="f-cont-box">
                            <h6 class="f-head">Navigation</h6>
                            <ul class="f-list">
                                <li>
                                    <?= Html::a('Home', ['/site/index']) ?>
                                </li>
                                <li>
                                    <?= Html::a('About Us', ['/site/about']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Services', ['/site/service']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Products', ['/site/products']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Project Gallery', ['/site/gallery']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Our Clients', ['/site/clients']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Contac Us', ['/site/contact']) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="f-cont-box">
                            <h6 class="f-head">Services</h6>
                            <ul class="f-list">
                                <?php
                                if (!empty($services)) {
                                    foreach ($services as $service) {
                                        ?>
                                        <li> <?= Html::a($service->name, ['/site/service', 'service' => $service->canonical_name], ['class' => '']) ?></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="f-head">Contacts</h6>
                        <ul class="f-Address-list">
                            <li>

                                <b>Address</b>
                            <dd class="cont">
                                <?= $home_contents->address ?>
                            </dd>
                            </li>
                            <li>
                                <b>Phones</b>
                            <dd class="cont">Tel: <?= $home_contents->phone ?></dd>
                            <dd class="cont">Mobile: <?= $home_contents->mobile ?></dd>
                            </dd>
                            </dl>
                            </li>
                            <li>
                                <b>E-mail</b>
                            <dd class="cont"><a href="mailto:<?= $home_contents->email ?>"><?= $home_contents->email ?></a></dd>
                            </li>
                            <li>
                            <dd class="cont">Web: <?= $home_contents->web_url ?></dt>
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
                    <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="<?= $social_media_links->facebook ?>" target="_blank"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-twitter" href="<?= $social_media_links->twitter ?>" target="_blank"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-google-plus" href="<?= $social_media_links->google_plus ?>" target="_blank"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-vimeo" href="<?= $social_media_links->vimeo ?>" target="_blank"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-youtube" href="<?= $social_media_links->youtube ?>" target="_blank"></a></li>
                    <li><a class="icon icon-xxs icon-primary fa fa-pinterest" href="<?= $social_media_links->instagram ?>" target="_blank"></a></li>
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