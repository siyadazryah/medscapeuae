<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\ServicemenuWidget;

//use common\models\Chairmans;
//use common\models\Sectors;
//use yii\bootstrap\ActiveForm;
?>
<section class="in-banner"><!--in-banner-->
  <div class="container">
    <h2 class="in-head">Services</h2>
    <div class="main-breadcrumb"><a href="<?= yii::$app->homeUrl ?>">Home</a><i>/</i><span>Piped medical gas system</span> </div>
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
                    	<li><a href="services.html" class="dropdown-item" title="">Piped medical gas system</a></li>
                      <li><a href="services.html" class="dropdown-item" title="">Medical Gas equipment’s</a></li>
                      <li><a href="services.html" class="dropdown-item" title="">Service and AMC contract</a></li>
                      <li><a href="services.html" class="dropdown-item" title="">OT Sliding door maintenance</a></li>
                      <li><a href="services.html" class="dropdown-item" title="">Medical furniture</a></li>
                      <li><a href="services.html" class="dropdown-item" title="">Project management</a></li>
                      <li><a href="services.html" class="dropdown-item" title="">Testing and commissioning</a></li>
                      <li><a href="services.html" class="dropdown-item" title="">Dental air & vacuum maintenance </a></li>
                    </ul>
                </div>
        </div> 
        <div class="col-lg-8">
        	<div class="services-cont-box">
            	<h3 class="head">Piped medical gas system</h3>
                <div class="img-box"><img src="images/service1.jpg" class="img-fluid"></div>
<p>Our hygiene water tank cleaning services are carried out as per international standard guidelines for the prevention of Legionella and are adhered to the strictest safety procedures. We use environmental friendly cleaning products. The chemicals used are of food grade quality and can be disposed into the sewage system with absolutely no detrimental effects.</p>

<p>We will chemically clean and disinfect your tanks, remove all sediment, fungi etc. which normally coat the inner walls of the tanks. Upon cleaning we will issue you with before and after cleaning photographs and cleaning certificate, which will be valid for one year.</p>
        
            </div>
        </div>
        </div>
    </div>	
</section>
<section class="in-services-testimonial"><!--in-services-testimonial-->
	<div class="container">
   	  <div class="testimonial-box">
        <div class="img-box"><img src="images/clients-say3.jpg" class="img-fluid rounded-circle"></div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
        <h3 class="sub-head">Selena gomaz</h3>
        <small>Genarel customer</small>
        </div>
    </div>
</section><!--in-services-testimonial-->
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