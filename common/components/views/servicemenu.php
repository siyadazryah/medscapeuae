<?php

use yii\helpers\Html;
?>
<div class="col-lg-4">
    <div class="service-categories">
        <h2 class="head active"><a data-toggle="collapse"  href="" role="button">our Services</a></h2>
        <ul class="list-box collapse" id="our-services">
            <?php if ($all_services) { ?>
                <?php foreach ($all_services as $service_) { ?>
                    <li><?= Html::a($service_->name, ['/site/service/','service'=>$service_->canonical_name], ['class' => 'dropdown-item']); ?>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>


