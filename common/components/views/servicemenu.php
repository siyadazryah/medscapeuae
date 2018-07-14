<?php

use yii\helpers\Html;
?>
<div class="col-lg-4">
    <div class="service-categories">
        <h2 class="head active"><a data-toggle="collapse"  href="" role="button">our Services</a></h2>
        <ul class="list-box collapse" id="our-services">
            <?php if ($all_services) { ?>
                <?php foreach ($all_services as $service_) { ?>
                    <li><?= Html::a($service_->name, ['/service/' . $service_->canonical_name], ['class' => 'dropdown-item']); ?>
                    <li><a href="services.html" class="dropdown-item" title="">Piped medical gas system</a></li>

                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>


