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
        <h2 class="in-head">Project Gallery</h2>
        <div class="main-breadcrumb"><a href="<?= yii::$app->homeUrl ?>">Home</a><i>/</i><span>project gallery</span> </div>
    </div>
</section>
<!--in-banner-->
<section class="in-gallery-section gallery"><!--in-service-section-->
    <div class="container">
        <div class="row">
            <?php
            if (!empty($project_gallery)) {
                foreach ($project_gallery as $gallery_image) {
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-box">
                            <img src="<?= yii::$app->homeUrl . 'uploads/project-gallery/' . $gallery_image->id . '/image.' . $gallery_image->image ?>" class="img-fluid">
                            <a href="<?= yii::$app->homeUrl . 'uploads/project-gallery/' . $gallery_image->id . '/image.' . $gallery_image->image ?>" rel="prettyPhoto[gallery1]" class="icon"></a>
                            <div class="head-box"><h3 class="head-text"><?= $gallery_image->title ?></h3></div>
                        </div>
                    </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- Content END-->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 2000, autoplay_slideshow: true});

    });
</script>   