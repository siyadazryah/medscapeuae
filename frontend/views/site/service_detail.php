<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\ServicemenuWidget;
?>

<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(<?= yii::$app->homeUrl ?>images/main-slider/slide2.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Service</h1>
                <div class="dlab-separator bg-primary"></div>
                <p class="text-white max-w800">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="<?= yii::$app->homeUrl ?>">Home</a></li>
                <li>Service</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="section-full bg-white content-inner">
        <!-- About Company -->
        <div class="container">
            <div class="row">
                 <?= ServicemenuWidget::widget(); ?>
                <?php // include './includes/service-left.php'; ?>
                <div class="col-md-9 col-sm-8">
                    <div class="row">

                        <div class="col-md-12 col-sm-6">
                            <div class="dlab-box">
                                <h1><?= $services->name ?></h1>
                                <div class="dlab-media m-b30 p-b5"> 
                                    <!--<a href="#">-->
                                    <img src="<?= yii::$app->homeUrl . 'uploads/services/' . $services->id . '/image.' . $services->image ?>" alt="<?= empty($services->image_alt) ? '' : $services->image_alt ?>" height="250px">
                                    <!--</a>-->
                                </div>
                                <!--<div class="dlab-media"> <a href="#"><img src="images/our-services/img3.jpg" alt=""></a></div>-->
                                <div class="dlab-info m-t30">
                                    <h4 class="dlab-title m-t0">
                                        <a href="#"><?= $services->title ?></a>
                                    </h4>
                                    <?= $services->content ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery m-b0" style="position: relative; height: 523px;">
                            <?php
                            $path = Yii::getAlias('@paths') . '/services/' . $services->id . '/gallery';
                            if (count(glob("{$path}/*")) > 0) {
                                foreach (glob("{$path}/*") as $file) {
                                    $arry = explode('/', $file);
                                    $img_nmee = end($arry);

                                    $img_nmees = explode('.', $img_nmee);
                                    if ($img_nmees['1'] != '') {
                                        ?>

                                        <li class="card-container col-lg-4 col-md-4 col-sm-6 col-xs-6" style="position: absolute; left: 0px; top: 0px;">
                                            <div class="dlab-box dlab-gallery-box">
                                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow">
                                                    <img src="<?= Yii::$app->homeUrl . '/uploads/services/' . $services->id . '/gallery/' . end($arry) ?>" alt="<?= $services->name ?>">
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="<?= Yii::$app->homeUrl . '/uploads/services/' . $services->id . '/gallery/' . end($arry) ?>" class="mfp-link" title="Image title come here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                        <?php
                                    }
                                }
                            }
                            ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->