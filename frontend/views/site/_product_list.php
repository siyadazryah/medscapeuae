<?php

use yii\helpers\Html;
?>
<div class="product-box">
    <img src="<?= yii::$app->homeUrl; ?>uploads/products/<?= $model->id ?>/<?= $model->id ?>.<?= $model->image ?>" alt="<?= $model->title ?>" class="img-fluid">
    <h3 class="head-text"><?= $model->title ?></h3>
</div>