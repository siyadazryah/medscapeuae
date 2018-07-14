<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppointmentWidget
 *
 * @author
 * JIthin Wails
 */

namespace common\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;
use common\models\Services;

class ServicemenuWidget extends Widget {

    public $id;

    public function init() {
        parent::init();
        if ($this->id === null) {
            return '';
        }
    }

    public function run() {
        $all_services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        return $this->render('servicemenu', [
                    'all_services' => $all_services,
        ]);
        //return Html::encode($this->message);
    }

}

?>
