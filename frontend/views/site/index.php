<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//use common\models\Chairmans;
//use common\models\Sectors;
//use yii\bootstrap\ActiveForm;
?>
<?php if ($sliders) { ?>
    <section class="banner">
        <div id="carousel" class="carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                $i = 0;
                foreach ($sliders as $slider) {
                    ?>
                    <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" style = "<?= $i != 0 ? 'position:absolute;  top:0px;' : '' ?>">
                        <div class="main-slider slider" style="background:url(<?= yii::$app->homeUrl . 'uploads/sliders/' . $slider->id . '/image.' . $slider->image ?>) no-repeat;">
                            <div class="overlay">
                                <div class="slide-margin">
                                    <div class="container">
                                        <div class="carousel-content">
                                            <h1 class="animation animated-item-1 head-style"><?= $slider->title ?> </h1>
                                            <h3 class="animation animated-item-2 head-style3"><?= $slider->content ?>.</h3>
                                            <?php if ($slider->link) { ?>
                                                <?= Html::a('View now!', [$slider->link], ['class' => 'button-link animation animated-item-3', 'style' => 'z-index:1;']) ?>
                                                <!--<a class="button-link animation animated-item-3" href="#" style="z-index:1;">View now!</a>--> 
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
            <!-- close carousel-inner --> 
            <a class="prev" href="#carousel" data-slide="prev"> <span class="fa fa-angle-left"></span> </a> <a class="next" href="#carousel" data-slide="next"> <span class="fa fa-angle-right"></span> </a>
        </div>
        <!-- close carousel --> 
    </section>
<?php } ?>
<!--banner--> 

<!-- Presentation -->
<section class="home-welcom-section" >
    <div class="container">
        <div class="main-head-section"><small class="small">Welcome to </small><h2 class="head">MedScape Medical</h2></div>
        <?= $home_content->welcome_content ?>
    </div>
</section>

<!-- The Power of Bootstrap Toolkit-->
<section class="home-why-choose-section">
    <div class="row">
        <div class="col-lg-6">
            <div class="cont-box">
                <div class="main-head-section-left"><small class="small">Why Choose Us</small><h2 class="head">Why Choose Us</h2></div>
                <?= $home_content->about_content ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="img-box" style="background: url(<?= yii::$app->homeUrl . 'uploads/about/about_image.' . $home_content->about_image ?>)">

            </div>
        </div>
    </div>
</section>

<!-- Content Driven Design-->
<section class="home-core-values-section">
    <div class="container">
        <div class="row justify-content-md-center flex-lg-row-reverse align-items-lg-center ">
            <div class="col-lg-6">
                <div class="main-head-section-left"><small class="small">Core Values</small><h2 class="head">Core Values</h2></div>
                <?= $home_content->core_value_content ?>
            </div>
            <div class="col-lg-6"><img src="<?= yii::$app->homeUrl . 'uploads/about/core_value_image.' . $home_content->core_value_image ?>" alt="core_value_image" class="img-fluid"/> </div>
        </div>
    </div>
</section>

<!-- Blurbs-->
<section class="home-services-section">
    <div class="container">
        <div class="main-head-section"><small class="small">Our Services</small><h2 class="head">Our Services</h2></div>
        <div class="row">
            <?php
            if (!empty($our_services)) {
                foreach ($our_services as $our_service) {
                    ?>
                    <div class="col-lg-4 "> 
                        <!-- Blurb minimal-->
                        <article class="cont-box">
                            <div class="icon-box"><span class="icon fa fa-heartbeat"></span></div>
                            <div class="unit-body">
                                <h3 class="head-title"><?= $our_service->name ?></h3>
                                <p><?= $our_service->home_page_content ?></p>
                            </div>
                        </article>
                    </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- GPL3 License advantages-->
<section class="home-products-section">
    <div class="container">
        <div class="row align-items-lg-center justify-content-lg-between">
            <div class="col-lg-5">
                <div class="cont-box">
                    <div class="main-head-section-left"><small class="small">Our Products</small><h2 class="head">Our Products</h2></div>
                    <?= $home_content->our_product_content ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6"><div class="img-box"><img src="<?= yii::$app->homeUrl . 'uploads/about/product_image1.' . $home_content->product_image1 ?>" alt="product_image1" class="img-fluid"/></div> </div>
                    <div class="col-6"><div class="img-box"><img src="<?= yii::$app->homeUrl . 'uploads/about/product_image2.' . $home_content->product_image2 ?>" alt="product_image2" class="img-fluid"/></div> </div>
                    <div class="col-6"><div class="img-box"><img src="<?= yii::$app->homeUrl . 'uploads/about/product_image3.' . $home_content->product_image3 ?>" alt="product_image3" class="img-fluid"/></div> </div>
                    <div class="col-6"><div class="img-box"><img src="<?= yii::$app->homeUrl . 'uploads/about/product_image4.' . $home_content->product_image4 ?>" alt="product_image4" class="img-fluid"/></div> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="what-we-offer-section"> 
    <!-- RD Parallax-->
    <div class="container">
        <div class="align-self-center">
            <h2 class="head"><?= $home_content->what_we_offer_title ?></h2>
            <p><?= $home_content->what_we_offer_content ?></p>
            <?= Html::a('View now!', ['/site/contact'],['class'=>'link']) ?>
        </div>
    </div>
</section>
<?php if ($partners) { ?>
    <section class="home-brand-section">
        <div class="container">
            <div class="main-head-section"><small class="small">Our clients</small><h2 class="head">Our clients</h2></div>
            <div class="content">
                <div class="slider lazy">
    <?php foreach ($partners as $client) { ?>
                        <div class="clients-box"> 
                            <img src="<?= yii::$app->homeUrl . 'uploads/clients/' . $client->id . '/image.' . $client->image . '?' . rand() ?>" alt="<?= empty($client->image_alt) ? '' : $client->image_alt ?>" title="" class="img-fluid"> 
                        </div>
    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Post Your Latest News-->
<section class="home-equipment-section">
    <div class="container">
        <div class="main-head-section"><small class="small">Products</small><h2 class="head">Products</h2></div>
        <div class="list-box">
            <div class="row">
                <?php
                if (!empty($equipments)) {
                    $k = 0;
                    $list1 = [];
                    $list2 = [];
                    foreach ($equipments as $equipment) {
                        $k++;
                        if ($k % 2 != 0) {
                            $list1[] = $equipment->name;
                        } else {
                            $list2[] = $equipment->name;
                        }
                    }
                }
                ?>
                <div class="col-lg-6">
                    <ul>
                        <?php
                        if (!empty($list1)) {
                            foreach ($list1 as $value1) {
                                ?>
                                <li><?= $value1 ?></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <?php
                        if (!empty($list2)) {
                            foreach ($list2 as $value2) {
                                ?>
                                <li><?= $value2 ?></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Share Your Company Testimonials-->
<?php if ($testimonials) { ?>
    <section class="home-testimonials-section text-center">
        <div class="container">
            <div class="main-head-section"><small class="small">our Testimonials</small><h2 class="head">Testimonials</h2></div>
            <div class="content">
                <div class="slider lazy-testimonials">
                    <!-- Quote default-->
    <?php foreach ($testimonials as $testimonial) { ?>
                        <div class="quote-default"> 
                            <div class="quote-icon"></div>
                            <div class="quote-default-text">
                                <p><?= $testimonial->message ?></p>
                            </div>
                            <h2 class="quote-default-cite"><?= $testimonial->name ?></h2>
                        </div>
    <?php } ?>

                </div>
            </div>

        </div>
    </section>
<?php } ?>
<!-- Subscribe form-->
<section class="home-subscribe-section text-center">
    <div class="container">
        <h5 class="head">Get latest news delivered daily!<br>
            We will send you breaking news right to your inbox.</h5>
        <!-- RD Mailform -->
        <div class="newsletter-form">
            <form id="mail-subscription">
                <div class="input-group"> <i class="mail-icon fa fa-envelope-o"></i>
                    <input type="email" class="form-control"  placeholder="Enter your Email Address" required value="" id="newsletter-email">
                    <div class="input-group-addon">
                        <input  type="submit" class="send" value="Subscribe">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {

        $("#mail-subscription").submit(function (e) {
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/subscribe-mail',
                data: {email: $('#newsletter-email').val()},
                success: function (data)
                {
                    if (data == 0) {
                        $('#newsletter-email').after('<div id="mail-alert">This Email is Already Subscribed</div>');
                    } else {
                        $('#newsletter-email').after('<div id="mail-alert">Your Email Subscription Send Successfully</div>');
                    }
                    $('#mail-alert').delay(2000).fadeOut('slow');
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>