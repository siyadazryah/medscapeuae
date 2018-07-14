<?php

use yii\helpers\Html;
?>
<div class="col-md-3 col-sm-4">
    <div class="widget_services style-2 m-b40">
        <ul>
            <li class="active"><a href="">ALL SERVICES</a> </li>
            <?php if ($all_services) { ?>
                <?php foreach ($all_services as $service_) { ?>
                    <li><?= Html::a($service_->name, ['/service/' . $service_->canonical_name]); ?>
                        </li>
                <?php } ?>
            <?php } ?>
<!--            <li><a href="service-inner.php">ELETRICAL</a>  </li>
            <li><a href="service-inner.php">OIL CHANGING</a>  </li>
            <li><a href="service-inner.php">PROGRAMMING & SCANNING</a> </li>
            <li><a href="service-inner.php">AUTOMATIC GEAR REPAIRING</a> </li>
            <li><a href="service-inner.php">A/C REPAIR</a> </li>-->
        </ul>
    </div>
    <div class="widget">
        <h4 class="widget-title">Get your brochures</h4>
        <div class="download-file">
            <ul>
                <li>
                    <a href="javascript:void(0);" target="_blank">
                        <span><i class="fa fa-file-pdf-o"></i></span>
                        <p>Company Brochures</p>
                        <i class="fa fa-download"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" target="_blank">
                        <span><i class="fa fa-file-pdf-o"></i></span>
                        <p>Company Info</p>
                        <i class="fa fa-download"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="widget  widget_getintuch">
        <h4 class="widget-title">Contact us</h4>
        <ul>
            <li><i class="fa fa-map-marker"></i><strong>address</strong><?= $contacts_content->address?> </li>
            <li><i class="fa fa-phone"></i><strong>phone</strong><?= $contacts_content->phone?></li>
        </ul>
    </div>
</div>
