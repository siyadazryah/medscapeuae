<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

//use common\models\Chairmans;
//use common\models\Sectors;
//use yii\bootstrap\ActiveForm;
?>

<!-- Content -->
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <h2 class="in-head">Our Clients</h2>
        <div class="main-breadcrumb"><a href="<?= yii::$app->homeUrl ?>">Home</a><i>/</i><span>Our Clients</span> </div>
    </div>
</section>
<!--in-banner-->
<div class="in-clients-section">
    <div class="container">
        <div class="main-head-section"><small class="small">Our Clients </small><h1 class="head">Our Clients</h1></div>

        <?php if ($partners) { ?>
            <div class="row">

                <?php foreach ($partners as $client) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6"><div class="clients-box "> 
                            <img src="<?= yii::$app->homeUrl . 'uploads/clients/' . $client->id . '/image.' . $client->image . '?' . rand() ?>" alt="<?= empty($client->image_alt) ? '' : $client->image_alt ?>" title="" class="img-fluid"> 
                        </div></div>
                <?php } ?>

            </div>
        <?php } ?>

    </div>
</div>
<!-- Content END-->