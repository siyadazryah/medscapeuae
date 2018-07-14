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
        <p class="text-box">MedScape as the name suggests is an extensive view or representation of the medical world and the equipments used in the medical world. We at MedScape make sure that the best medical products such as Laboratory & Scientific Equipment, Medical & Surgical Equipment, Physiotherapy Equipments, Hospital Furniture’s, Wheel Chairs, Orthopaedic supports, Surgical disposables , Medical Gas Equipment etc. are delivered at your footsteps. The Service provided by us will be one on which you can count on always.</p>
    </div>
</section>

<!-- The Power of Bootstrap Toolkit-->
<section class="home-why-choose-section">
    <div class="row">
        <div class="col-lg-6">
            <div class="cont-box">
                <div class="main-head-section-left"><small class="small">Why Choose Us</small><h2 class="head">Why Choose Us</h2></div>
                <p>MedScape as the name suggests is an extensive view or representation of the medical world and the equipments used in the medical world.</p>
                <p>We at MedScape make sure that the best medical products such as Laboratory & Scientific Equipment, Medical & Surgical Equipment, Physiotherapy Equipments, Hospital Furniture’s, Wheel Chairs, Orthopaedic supports, Surgical disposables , Medical Gas Equipment etc. are delivered at your footsteps.</p>
                <p>The Service provided by us will be one on which you can count on always.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="img-box">


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
                <p class="text-box">We believe in treating our customers with respect and faith We grow through creativity, invention and innovation. We integrate honesty, integrity and business ethics into all aspects of our business functioning.</p>
            </div>
            <div class="col-lg-6"><img src="images/core-img.jpg" alt="" class="img-fluid"/> </div>
        </div>
    </div>
</section>

<!-- Blurbs-->
<section class="home-services-section">
    <div class="container">
        <div class="main-head-section"><small class="small">Core Values</small><h2 class="head">Our Services</h2></div>
        <div class="row">
            <div class="col-lg-4 "> 
                <!-- Blurb minimal-->
                <article class="cont-box">
                    <div class="icon-box"><span class="icon fa fa-heartbeat"></span></div>
                    <div class="unit-body">
                        <h3 class="head-title">Defibrillator</h3>
                        <p>Defibrillation is a process in which an electronic device gives an electric shock to the heart. This helps reestablish normal contraction rhythms in a heart having dangerous arrhythmia or in cardiac arrest.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 "> 
                <!-- Blurb minimal-->
                <article class="cont-box">
                    <div class="icon-box"><span class="icon fa fa-heartbeat"></span></div>
                    <div class="unit-body">
                        <h3 class="head-title">Bed Head Unit</h3>
                        <p>Bedhead unit is a horizontal type integrating a variety of functions such as those for doctors and nurses to make diagnosis and medical treatment and those for patient's lighting and communication.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 "> 
                <!-- Blurb minimal-->
                <article class="cont-box">
                    <div class="icon-box"><span class="icon fa fa-heartbeat"></span></div>
                    <div class="unit-body">
                        <h3 class="head-title">Fetal Doppler</h3>
                        <p>A fetal doppler is one type of fetal monitoring. The fetal heart doppler is a non-invasive diagnostic instrument used to detect and measure the fetal heart rate</p>
                    </div>
                </article>
            </div>
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
                    <p>MedScape Medical gives you an ultimate set of tools that allow you to take full  control of your site with responsive & retina-ready design, various child themes, social integration, SEO optimization and other important and powerful features.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6"><div class="img-box"><img src="images/home-projects1.jpg" alt="" class="img-fluid"/></div> </div>
                    <div class="col-6"><div class="img-box"><img src="images/home-projects2.jpg" alt="" class="img-fluid"/></div> </div>
                    <div class="col-6"><div class="img-box"><img src="images/home-projects3.jpg" alt="" class="img-fluid"/></div> </div>
                    <div class="col-6"><div class="img-box"><img src="images/home-projects4.jpg" alt="" class="img-fluid"/></div> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="what-we-offer-section"> 
    <!-- RD Parallax-->
    <div class="container">
        <div class="align-self-center">
            <h2 class="head">Like What We Offer?</h2>
            <p>Start with this demo now or check out the others to choose what you need.</p>
            <a class="link" href="#">View now!</a> 
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
        <div class="main-head-section"><small class="small">Equipment's</small><h2 class="head">Equipment's</h2></div>
        <div class="list-box">
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li>Weigh scale digital with BMI ( ADULT, INFANT , PED)</li>
                        <li>Medical furniture</li>
                        <li>Patent monitor</li>
                        <li>Electrosurgical unit</li>
                        <li>Operation tables</li>
                        <li>Dental unit and dental equipment</li>
                        <li>Oxygen cylinders</li>
                        <li>Medical Gas Equipment Accessory</li>
                        <li>Medical Gas System: Air Plant,Vacuum Plant, Manufoldes-(O2,N2O,Air4Bar,Air 7Bar,Entnox,Co2), A.G.S.S. Plant</li>
                        <li>CPAP & BIPAP</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>

                        <li>Medical lights</li>
                        <li>First aid kits and emergency bags</li>
                        <li>Bone dens meter</li>
                        <li>Colposcopes</li>
                        <li>Defibrillator</li>
                        <li>Automatic external defibrillators AED</li>
                        <li>Medical refrigerators</li>
                        <li>Laboratory Equipments</li>
                        <li>Medical Equipment Accessories</li>
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
            <form>
                <div class="input-group"> <i class="mail-icon fa fa-envelope-o"></i>
                    <input type="text" class="form-control"  placeholder="Enter your Email Address" required value="">
                    <div class="input-group-addon">
                        <input  type="submit" class="send" value="Subscribe">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

